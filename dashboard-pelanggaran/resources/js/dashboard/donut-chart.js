import Chart from "chart.js/auto";

const canvas = document.getElementById("donutChart");

if (canvas) {

    new Chart(canvas, {

        type: "doughnut",

        data: {

            labels: [
                "Pelanggaran",
                "Kecelakaan",
                "Lainnya"
            ],

            datasets: [{

                data: [
                    68,
                    22,
                    10
                ],

                backgroundColor: [
                    "#2563eb",
                    "#22c55e",
                    "#f59e0b"
                ],

                borderWidth: 0,

                hoverOffset: 8

            }]

        },

        options: {

            responsive: true,

            maintainAspectRatio: false,

            cutout: "70%",

            plugins: {

                legend: {

                    position: "bottom",

                    labels: {

                        usePointStyle: true,
                        padding: 20

                    }

                }

            }

        }

    });

}