import Chart from "chart.js/auto";

const canvas = document.getElementById("trendChart");

if (canvas) {
    const chartData = JSON.parse(canvas.dataset.chart);
    const chartLabels = JSON.parse(canvas.dataset.labels);
    const ctx = canvas.getContext("2d");

    const gradient = ctx.createLinearGradient(0, 0, 0, 350);

    gradient.addColorStop(0, "rgba(37,99,235,.35)");
    gradient.addColorStop(1, "rgba(37,99,235,0)");

    new Chart(ctx, {
        type: "line",

        data: {
            labels: chartLabels,

            datasets: [
                {
                    label: "Jumlah Pelanggaran",

                    data: chartData,

                    borderColor: "#2563eb",

                    backgroundColor: gradient,

                    fill: true,

                    tension: 0.4,

                    borderWidth: 3,

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
                    backgroundColor: "#1e293b",

                    padding: 12,

                    displayColors: false,

                    callbacks: {
                        label: function (context) {
                            return " " + context.parsed.y + " Pelanggaran";
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

                    border: {
                        display: false,
                    },
                },
            },
        },
    });
}
