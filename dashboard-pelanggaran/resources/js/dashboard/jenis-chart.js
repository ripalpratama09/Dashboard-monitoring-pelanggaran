import { initJenisChart } from "./statistik-jenis-chart";

const canvas = document.getElementById("jenisChart");

if (canvas) {
    initJenisChart(canvas);
}

export { initJenisChart };
