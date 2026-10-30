<div class="card chart-card mb-4">

    <div class="card-header bg-white border-0 py-3">

        <h5 class="fw-bold mb-1">
            Sebaran Pelanggaran Kabupaten Bantul
        </h5>

        <small class="text-muted">
            Berdasarkan jumlah pelanggaran per Kapanewon
        </small>

    </div>

    <div class="card-body p-0">

        <div
            id="map"
            data-map='@json($dashboard["map"] ?? [])'>
        </div>

    </div>

</div>