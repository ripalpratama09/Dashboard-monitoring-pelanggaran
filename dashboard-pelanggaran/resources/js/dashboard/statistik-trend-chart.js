import Chart from "chart.js/auto";

const canvas = document.getElementById("statistikTrendChart");

if (canvas) {
    const labels = JSON.parse(canvas.dataset.labels || "[]");
    const data = JSON.parse(canvas.dataset.chart || "[]");

    new Chart(canvas, {
        type: "line",

        data: {
            labels: labels,

            datasets: [
                {
                    label: "Jumlah Pelanggaran",

                    data: data,

                    borderColor: "#2563eb",
                    backgroundColor: "rgba(37, 99, 235, 0.15)",

                    borderWidth: 3,

                    fill: true,

                    tension: 0.4,

                    pointRadius: 5,
                    pointHoverRadius: 8,

                    pointBackgroundColor: "#ffffff",
                    pointBorderColor: "#2563eb",
                    pointBorderWidth: 3,
                },
            ],
        },

        options: {
            responsive: true,
            maintainAspectRatio: false,

            interaction: {
                intersect: false,
                mode: "index",
            },

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
                            return "Tahun " + context[0].label;
                        },

                        label: function (context) {
                            return " " + context.parsed.y + " pelanggaran";
                        },
                    },
                },
            },

            scales: {
                x: {
                    grid: {
                        display: false,
                    },
                },

                y: {
                    beginAtZero: true,

                    ticks: {
                        precision: 0,
                    },

                    grid: {
                        color: "rgba(148, 163, 184, 0.15)",
                    },
                },
            },
        },
    });
}
