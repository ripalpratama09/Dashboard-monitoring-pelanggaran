{{-- =========================================================
     PERBANDINGAN WILAYAH + RANKING
========================================================= --}}

<div class="statistik-grid">

    {{-- Perbandingan Wilayah --}}
    <div class="statistik-card">

        <div class="card-header d-flex justify-content-between align-items-start">

            <div>
                <h5 class="mb-1">
                    Perbandingan Pelanggaran
                </h5>

                <small>
                    Berdasarkan wilayah
                </small>
            </div>

            <div class="icon-box bg-primary-subtle text-primary">
                <i class="bi bi-bar-chart-fill"></i>
            </div>

        </div>

        <div class="card-body">

            <div class="statistik-chart-wrapper wilayah">

                @include('partials.charts.bar-chart')

            </div>

        </div>

    </div>


    {{-- Ranking Wilayah --}}
    <div class="statistik-card statistik-ranking">

        <div class="card-header d-flex justify-content-between align-items-start">

            <div>
                <h5 class="mb-1">
                    Ranking Wilayah
                </h5>

                <small>
                    Berdasarkan jumlah pelanggaran
                </small>
            </div>

            <div class="icon-box bg-warning-subtle text-warning">
                <i class="bi bi-trophy-fill"></i>
            </div>

        </div>

        <div class="card-body">

            @include('partials.ranking')

        </div>

    </div>

</div>


{{-- =========================================================
     TREN + JENIS PELANGGARAN
========================================================= --}}

<div class="statistik-grid">

    {{-- Tren Pelanggaran --}}
    <div class="statistik-card">

        <div class="card-header d-flex justify-content-between align-items-start">

            <div>
                <h5 class="mb-1">
                    Tren Pelanggaran
                </h5>

                <small>
                    Perkembangan jumlah pelanggaran berdasarkan tahun
                </small>
            </div>

            <div class="icon-box bg-info-subtle text-info">
                <i class="bi bi-graph-up-arrow"></i>
            </div>

        </div>

        <div class="card-body">

            <div class="statistik-chart-wrapper trend">

                @include('partials.charts.line-chart')

            </div>

        </div>

    </div>


    {{-- Jenis Pelanggaran --}}
    <div class="statistik-card">

        <div class="card-header d-flex justify-content-between align-items-start">

            <div>
                <h5 class="mb-1">
                    Jenis Pelanggaran
                </h5>

                <small>
                    Komposisi berdasarkan jumlah
                </small>
            </div>

            <div class="icon-box bg-warning-subtle text-warning">
                <i class="bi bi-pie-chart-fill"></i>
            </div>

        </div>

        <div class="card-body">

            @include('partials.charts.jenis-chart')

        </div>

    </div>

</div>