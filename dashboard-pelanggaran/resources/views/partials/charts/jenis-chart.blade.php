<div class="statistik-chart-wrapper jenis">
    <canvas
        id="jenisChart"
        data-labels='@json($dashboard["charts"]["jenis"]["labels"] ?? [])'
        data-chart='@json($dashboard["charts"]["jenis"]["data"] ?? [])'>
    </canvas>
</div>