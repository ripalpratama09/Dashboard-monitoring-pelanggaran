<div class="card chart-card">

    <div class="card-header bg-white border-0 py-3">

        <div>
            <h5 class="fw-bold mb-1">
                Top 10 Kapanewon
            </h5>

            <small class="text-muted">
                Berdasarkan jumlah pelanggaran
            </small>
        </div>

    </div>

    <div class="card-body">

        <div style="position: relative; height: 350px;">

            <canvas
                id="barChart"
                data-labels='@json($dashboard["charts"]["bar"]["labels"] ?? [])'
                data-chart='@json($dashboard["charts"]["bar"]["data"] ?? [])'>
            </canvas>

        </div>

    </div>

</div>