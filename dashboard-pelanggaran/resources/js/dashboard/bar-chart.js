import Chart from "chart.js/auto";

const canvas = document.getElementById("barChart");

if (canvas) {

    const chartLabels = JSON.parse(canvas.dataset.labels);
    const chartData = JSON.parse(canvas.dataset.chart);

    new Chart(canvas, {

        type: "bar",

        data: {

            labels: chartLabels,

            datasets: [
                {
                    label: "Pelanggaran",

                    data: chartData,

                    backgroundColor: "#2563eb",

                    borderRadius: 8,

                    borderSkipped: false,
                },
            ],

        },

        options: {

            responsive: true,

            maintainAspectRatio: false,

            plugins: {

                legend: {
                    display: false,
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