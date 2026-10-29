import Chart from "chart.js/auto";

const canvas = document.getElementById("statistikWilayahChart");

if (canvas) {
    const labels = JSON.parse(canvas.dataset.labels || "[]");
    const data = JSON.parse(canvas.dataset.chart || "[]");

    /*
    |--------------------------------------------------------------------------
    | GRADASI WARNA BIRU
    |--------------------------------------------------------------------------
    | Nilai tertinggi → biru paling pekat
    | Nilai terendah  → biru paling muda
    */

    const maxValue = Math.max(...data);
    const minValue = Math.min(...data);

    const colors = data.map((value) => {
        if (maxValue === minValue) {
            return "#2563eb";
        }

        const ratio = (value - minValue) / (maxValue - minValue);

        if (ratio >= 0.8) {
            return "#2563eb";
        }

        if (ratio >= 0.6) {
            return "#3b82f6";
        }

        if (ratio >= 0.4) {
            return "#60a5fa";
        }

        if (ratio >= 0.2) {
            return "#93c5fd";
        }

        return "#bfdbfe";
    });

    new Chart(canvas, {
        type: "bar",

        data: {
            labels: labels,

            datasets: [
                {
                    label: "Jumlah Pelanggaran",

                    data: data,

                    backgroundColor: colors,

                    borderRadius: 6,

                    borderSkipped: false,

                    barThickness: 14,

                    maxBarThickness: 18,
                },
            ],
        },

        options: {
            indexAxis: "y",

            responsive: true,

            maintainAspectRatio: false,

            plugins: {
                legend: {
                    display: false,
                },

                tooltip: {
                    backgroundColor: "#172033",

                    padding: 12,

                    displayColors: false,

                    callbacks: {
                        title: function (context) {
                            return context[0].label;
                        },

                        label: function (context) {
                            return " " + context.parsed.x + " pelanggaran";
                        },
                    },
                },
            },

            scales: {
                x: {
                    beginAtZero: true,

                    ticks: {
                        precision: 0,
                    },

                    grid: {
                        color: "rgba(148, 163, 184, 0.15)",
                    },
                },

                y: {
                    grid: {
                        display: false,
                    },

                    ticks: {
                        font: {
                            size: 10,
                        },
                    },
                },
            },
        },
    });
}