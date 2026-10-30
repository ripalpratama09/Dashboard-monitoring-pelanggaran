import Chart from "chart.js/auto";

export function initJenisChart(canvas) {
    if (!canvas) return;

    const existing = Chart.getChart(canvas);
    if (existing) {
        existing.destroy();
    }

    const labels = JSON.parse(canvas.dataset.labels || "[]");
    const data = JSON.parse(canvas.dataset.chart || "[]");

    const colors = [
        "#2563eb",
        "#8b5cf6",
        "#16a34a",
        "#f59e0b",
        "#06b6d4",
        "#ef4444",
        "#ec4899",
        "#64748b",
    ];

    const total = data.reduce((sum, value) => sum + Number(value || 0), 0);

    let selectedSliceIndex = null;

    new Chart(canvas, {
        type: "doughnut",

        data: {
            labels: labels,

            datasets: [
                {
                    data: data,

                    backgroundColor: colors.slice(0, data.length),

                    borderWidth: 3,
                    borderColor: "#ffffff",

                    hoverOffset: 10,
                    offset: data.map(() => 0),
                },
            ],
        },

        options: {
            responsive: true,
            maintainAspectRatio: false,

            cutout: "60%",

            onHover: (event, elements, chart) => {
                chart.canvas.style.cursor =
                    elements && elements.length > 0 ? "pointer" : "default";
            },

            onClick: (event, elements, chart) => {
                if (elements && elements.length > 0) {
                    const clickedIndex = elements[0].index;
                    if (selectedSliceIndex === clickedIndex) {
                        selectedSliceIndex = null;
                    } else {
                        selectedSliceIndex = clickedIndex;
                    }
                } else {
                    selectedSliceIndex = null;
                }

                chart.data.datasets[0].offset = data.map((_, i) =>
                    i === selectedSliceIndex ? 10 : 0
                );

                chart.update();
            },

            plugins: {
                legend: {
                    position: "bottom",

                    onClick: (e, legendItem, legend) => {
                        const chart = legend.chart;
                        const clickedIndex = legendItem.index;

                        if (selectedSliceIndex === clickedIndex) {
                            selectedSliceIndex = null;
                        } else {
                            selectedSliceIndex = clickedIndex;
                        }

                        chart.data.datasets[0].offset = data.map((_, i) =>
                            i === selectedSliceIndex ? 10 : 0
                        );

                        chart.update();
                    },

                    labels: {
                        usePointStyle: true,
                        pointStyle: "circle",
                        padding: 14,

                        font: {
                            size: 10,
                        },
                    },
                },

                tooltip: {
                    backgroundColor: "#172033",
                    padding: 12,
                    displayColors: true,

                    callbacks: {
                        label: function (context) {
                            const value = Number(context.raw || 0);

                            return " " + value + " pelanggaran";
                        },
                    },
                },
            },
        },

        plugins: [
            {
                id: "slicePercentage",

                afterDatasetsDraw(chart) {
                    const { ctx } = chart;
                    const datasetMeta = chart.getDatasetMeta(0);
                    if (!datasetMeta || !datasetMeta.data) return;

                    ctx.save();
                    ctx.textAlign = "center";
                    ctx.textBaseline = "middle";
                    ctx.font = "bold 11px Arial, sans-serif";
                    ctx.fillStyle = "#ffffff";
                    ctx.shadowColor = "rgba(0, 0, 0, 0.45)";
                    ctx.shadowBlur = 4;

                    datasetMeta.data.forEach((element, index) => {
                        const value = Number(data[index] || 0);
                        if (value <= 0 || total <= 0) return;

                        const percentageNum = (value / total) * 100;
                        if (percentageNum < 3.5) return;

                        const percentageText =
                            (percentageNum % 1 === 0
                                ? percentageNum.toFixed(0)
                                : percentageNum.toFixed(1)) + "%";

                        const {
                            startAngle,
                            endAngle,
                            innerRadius,
                            outerRadius,
                            x: centerX,
                            y: centerY,
                        } = element;

                        const midAngle = (startAngle + endAngle) / 2;
                        const midRadius = (innerRadius + outerRadius) / 2;

                        const posX = centerX + Math.cos(midAngle) * midRadius;
                        const posY = centerY + Math.sin(midAngle) * midRadius;

                        ctx.fillText(percentageText, posX, posY);
                    });

                    ctx.restore();
                },
            },
            {
                id: "centerText",

                beforeDraw(chart) {
                    const { ctx, chartArea } = chart;

                    if (!chartArea) {
                        return;
                    }

                    const centerX = (chartArea.left + chartArea.right) / 2;
                    const centerY = (chartArea.top + chartArea.bottom) / 2;

                    ctx.save();
                    ctx.textAlign = "center";
                    ctx.textBaseline = "middle";

                    if (
                        selectedSliceIndex !== null &&
                        selectedSliceIndex >= 0 &&
                        selectedSliceIndex < data.length
                    ) {
                        const selectedVal = Number(
                            data[selectedSliceIndex] || 0
                        );
                        const selectedColor =
                            colors[selectedSliceIndex % colors.length] ||
                            "#0f172a";
                        const selectedLabel =
                            labels[selectedSliceIndex] || "Pelanggaran";

                        ctx.fillStyle = selectedColor;
                        ctx.font = "700 28px Arial";
                        ctx.fillText(selectedVal, centerX, centerY - 9);

                        ctx.fillStyle = "#64748b";
                        ctx.font = "600 11px Arial";

                        let displayLabel = selectedLabel;
                        if (displayLabel.length > 18) {
                            displayLabel =
                                displayLabel.substring(0, 16) + "...";
                        }
                        ctx.fillText(displayLabel, centerX, centerY + 14);
                    } else {
                        ctx.fillStyle = "#0f172a";
                        ctx.font = "700 24px Arial";
                        ctx.fillText(total, centerX, centerY - 7);

                        ctx.fillStyle = "#64748b";
                        ctx.font = "500 11px Arial";
                        ctx.fillText("Total Pelanggaran", centerX, centerY + 14);
                    }

                    ctx.restore();
                },
            },
        ],
    });
}

function initAllJenisCharts() {
    const ids = ["statistikJenisChart", "jenisChart"];
    ids.forEach((id) => {
        const el = document.getElementById(id);
        if (el) {
            initJenisChart(el);
        }
    });
}

if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initAllJenisCharts);
} else {
    initAllJenisCharts();
}

