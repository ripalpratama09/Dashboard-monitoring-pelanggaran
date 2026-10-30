import L from "leaflet";

const mapContainer = document.getElementById("map");

if (mapContainer && !mapContainer._leaflet_id) {
    /*
    |--------------------------------------------------------------------------
    | DATA PELANGGARAN DARI DATABASE
    |--------------------------------------------------------------------------
    */

    const mapData = JSON.parse(mapContainer.dataset.map || "[]");

    /*
    |--------------------------------------------------------------------------
    | MEMBUAT OBJECT DATA BERDASARKAN NAMA KAPANEWON
    |--------------------------------------------------------------------------
    */

    const normalizeName = (name) => {
        return String(name || "")
            .toLowerCase()
            .replace(/kapanewon/g, "")
            .replace(/kecamatan/g, "")
            .replace(/[^a-z0-9]/g, "")
            .trim();
    };

    const violationData = {};

    mapData.forEach((item) => {
        violationData[normalizeName(item.nama)] = {
            nama: item.nama,

            jumlah: Number(item.jumlah) || 0,

            jenis: Array.isArray(item.jenis) ? item.jenis : [],
        };
    });

    const formatJumlah = (value) =>
        new Intl.NumberFormat("id-ID", {
            maximumFractionDigits: 2,
        }).format(Number(value) || 0);

    const escapeHtml = (value) =>
        String(value).replace(/[&<>"']/g, (character) => {
            const entities = {
                "&": "&amp;",
                "<": "&lt;",
                ">": "&gt;",
                '"': "&quot;",
                "'": "&#39;",
            };

            return entities[character];
        });

    const renderJenisPelanggaran = (jenis) => {
        const jenisBerisiData = jenis.filter(
            (item) => Number(item.jumlah) > 0,
        );

        if (jenisBerisiData.length === 0) {
            return '<div style="font-size: 11.5px; color: #94a3b8; font-style: italic; margin-top: 4px;">Tidak ada rincian jenis pelanggaran.</div>';
        }

        return `
            <div class="map-tooltip-jenis-list">
                ${jenisBerisiData
                    .map(
                        (item) => `
                            <div class="map-tooltip-jenis-item">
                                <span>${escapeHtml(item.nama)}</span>
                                <strong>${formatJumlah(item.jumlah)}</strong>
                            </div>
                        `,
                    )
                    .join("")}
            </div>
        `;
    };

    /*
    |--------------------------------------------------------------------------
    | NILAI MAKSIMUM
    |--------------------------------------------------------------------------
    */

    const values = mapData.map((item) => Number(item.jumlah) || 0);

    const maxValue = Math.max(...values, 0);

    /*
    |--------------------------------------------------------------------------
    | WARNA CHOROPLETH
    |--------------------------------------------------------------------------
    */

    const getColor = (value) => {
        if (maxValue <= 0) {
            return "#e2e8f0";
        }

        const ratio = value / maxValue;

        if (ratio >= 0.8) {
            return "#1e3a8a";
        }

        if (ratio >= 0.6) {
            return "#2563eb";
        }

        if (ratio >= 0.4) {
            return "#60a5fa";
        }

        if (ratio >= 0.2) {
            return "#93c5fd";
        }

        if (ratio > 0) {
            return "#dbeafe";
        }

        return "#f1f5f9";
    };

    /*
    |--------------------------------------------------------------------------
    | MEMBUAT PETA
    |--------------------------------------------------------------------------
    */

    const map = L.map(mapContainer).setView([-7.888, 110.328], 11);

    /*
    |--------------------------------------------------------------------------
    | OPENSTREETMAP
    |--------------------------------------------------------------------------
    */

    const osm = L.tileLayer(
        "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
        {
            attribution: "&copy; OpenStreetMap contributors",
        },
    ).addTo(map);

    map.createPane("choroplethPane");
    map.getPane("choroplethPane").style.zIndex = 450;

    /*
    |--------------------------------------------------------------------------
    | LAYER KAPANEWON / CHOROPLETH
    |--------------------------------------------------------------------------
    */

    const kecamatanLayer = L.geoJSON(null, {
        pane: "choroplethPane",

        style: (feature) => {
            const properties = feature.properties || {};

            const name =
                properties.WADMKC ||
                properties.NAMOBJ ||
                properties.NAME ||
                properties.name ||
                "Kapanewon";

            const data = violationData[normalizeName(name)];

            const jumlah = data?.jumlah || 0;

            return {
                color: "#1e293b",

                weight: 1.5,

                fillColor: getColor(jumlah),

                fillOpacity: 0.85,
            };
        },

        onEachFeature: (feature, layer) => {
            const properties = feature.properties || {};

            const name =
                properties.WADMKC ||
                properties.NAMOBJ ||
                properties.NAME ||
                properties.name ||
                "Kapanewon";

            const data = violationData[normalizeName(name)];

            const jumlah = data?.jumlah || 0;

            const jenis = data?.jenis || [];

            /*
            |--------------------------------------------------------------------------
            | TOOLTIP HOVER (MENGIKUTI KURSOR TEPAT DI ATAS AREA)
            |--------------------------------------------------------------------------
            */

            const tooltipContent = `
                <div class="map-tooltip-content">
                    <div class="map-tooltip-title">Kapanewon ${escapeHtml(name)}</div>
                    <div class="map-tooltip-total">
                        Total Pelanggaran: <strong>${formatJumlah(jumlah)}</strong>
                    </div>
                    ${renderJenisPelanggaran(jenis)}
                </div>
            `;

            layer.bindTooltip(tooltipContent, {
                sticky: true,
                direction: "top",
                offset: [0, -10],
                className: "map-hover-tooltip",
                opacity: 0.98,
            });

            /*
            |--------------------------------------------------------------------------
            | POPUP
            |--------------------------------------------------------------------------
            */

            layer.bindPopup(
                `
                <div style="min-width: 180px;">

                    <strong>Kapanewon ${escapeHtml(name)}</strong>

                    <hr style="margin: 8px 0;">

                    <div>
                        Total Pelanggaran:
                        <strong>${formatJumlah(jumlah)}</strong>
                    </div>

                    ${renderJenisPelanggaran(jenis)}

                </div>
                `,
            );

            /*
            |--------------------------------------------------------------------------
            | INTERAKSI HOVER
            |--------------------------------------------------------------------------
            */

            layer.on({
                mouseover: (event) => {
                    event.target.setStyle({
                        weight: 3,

                        color: "#0f172a",

                        fillOpacity: 0.9,
                    });

                    event.target.bringToFront();
                },

                mouseout: (event) => {
                    kecamatanLayer.resetStyle(event.target);
                },

                click: (event) => {
                    event.target.setStyle({
                        weight: 4,

                        color: "#0f172a",

                        fillOpacity: 1,
                    });
                },
            });
        },
    });

    /*
    |--------------------------------------------------------------------------
    | LAYER KALURAHAN
    |--------------------------------------------------------------------------
    */

    const desaLayer = L.geoJSON(null, {
        style: {
            color: "#64748b",

            weight: 0.8,

            fill: false,
        },

        onEachFeature: (feature, layer) => {
            const properties = feature.properties || {};

            const name =
                properties.WADMKD ||
                properties.NAMOBJ ||
                properties.NAME ||
                properties.name ||
                "Desa/Kalurahan";

            const district = properties.WADMKC || "Tidak diketahui";

            layer.bindTooltip(name, {
                sticky: true,
            });

            layer.bindPopup(
                `
                <strong>${name}</strong><br>
                <small>
                    Kapanewon ${district}
                </small><br>
                <small>
                    Kabupaten Bantul
                </small>
                `,
            );
        },
    });

    /*
    |--------------------------------------------------------------------------
    | LOAD GEOJSON
    |--------------------------------------------------------------------------
    */

    const loadGeoJson = async (url, layer) => {
        const response = await fetch(url);

        if (!response.ok) {
            throw new Error(`Gagal memuat ${url}`);
        }

        const data = await response.json();

        layer.addData(data).addTo(map);
    };

    /*
    |--------------------------------------------------------------------------
    | LOAD BATAS KALURAHAN & BATAS KAPANEWON
    |--------------------------------------------------------------------------
    */

    loadGeoJson("/geojson/batas_kal.geojson", desaLayer).catch((error) => {
        console.error("GeoJSON Kalurahan:", error);
    });

    loadGeoJson("/geojson/batas_kap.geojson", kecamatanLayer)
        .then(() => {
            kecamatanLayer.bringToFront();

            if (kecamatanLayer.getBounds().isValid()) {
                map.fitBounds(kecamatanLayer.getBounds(), {
                    padding: [20, 20],
                });
            }
        })
        .catch((error) => {
            console.error("GeoJSON Kapanewon:", error);
        });

    /*
    |--------------------------------------------------------------------------
    | LAYER CONTROL
    |--------------------------------------------------------------------------
    */

    L.control
        .layers(
            {
                OpenStreetMap: osm,
            },

            {
                "Choropleth Pelanggaran": kecamatanLayer,

                "Batas Desa/Kalurahan": desaLayer,
            },

            {
                collapsed: false,
            },
        )
        .addTo(map);

    /*
    |--------------------------------------------------------------------------
    | LEGEND CHOROPLETH
    |--------------------------------------------------------------------------
    */

    const legend = L.control({
        position: "bottomright",
    });

    legend.onAdd = () => {
        const div = L.DomUtil.create("div", "map-legend");

        const levels = [
            {
                label: "0",
                value: 0,
            },

            {
                label: "Rendah (1–20%)",
                value: maxValue * 0.1,
            },

            {
                label: "21–40%",
                value: maxValue * 0.3,
            },

            {
                label: "41–60%",
                value: maxValue * 0.5,
            },

            {
                label: "61–80%",
                value: maxValue * 0.7,
            },

            {
                label: "81–100% (terbanyak)",
                value: maxValue * 0.9,
            },
        ];

        div.innerHTML = `
            <strong>
                Jumlah Pelanggaran
            </strong>
        `;

        levels.forEach((item) => {
            div.innerHTML += `

                <div class="legend-item">

                    <span
                        class="legend-box"
                        style="
                            background:
                            ${getColor(item.value)};
                            border:
                            1px solid
                            #64748b;
                        "
                    ></span>

                    <span>
                        ${item.label}
                    </span>

                </div>

            `;
        });

        return div;
    };

    legend.addTo(map);
}
