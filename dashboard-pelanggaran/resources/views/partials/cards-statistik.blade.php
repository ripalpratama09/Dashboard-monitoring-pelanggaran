<div class="row g-4 mb-4">

    {{-- ========================================================= --}}
    {{-- TOTAL PELANGGARAN --}}
    {{-- ========================================================= --}}

    <div class="col-lg-4">

        <div class="card dashboard-card h-100">

            <div class="card-body">

                <div class="d-flex justify-content-between align-items-start">

                    <div>

                        <small class="text-muted">
                            Total Pelanggaran
                        </small>

                        <h3 class="fw-bold mt-2 mb-0">

                            {{ number_format(
                                $dashboard['cards']['totalPelanggaran'] ?? 0,
                                0,
                                ',',
                                '.'
                            ) }}

                        </h3>

                        <small class="text-muted">

                            {{ $dashboard['cards']['tahun'] ?? '' }}

                        </small>

                    </div>


                    <div class="icon-box bg-primary-subtle text-primary">

                        <i class="bi bi-exclamation-triangle-fill"></i>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- ========================================================= --}}
    {{-- WILAYAH TERTINGGI --}}
    {{-- ========================================================= --}}

    <div class="col-lg-4">

        <div class="card dashboard-card h-100">

            <div class="card-body">

                <div class="d-flex justify-content-between align-items-start">

                    <div>

                        <small class="text-muted">
                            Wilayah Tertinggi
                        </small>

                        <h4 class="fw-bold mt-2 mb-0">

                            {{ $dashboard['cards']['wilayahTertinggi']['nama'] ?? '-' }}

                        </h4>

                        <small class="text-muted">

                            {{ number_format(
                                $dashboard['cards']['wilayahTertinggi']['jumlah'] ?? 0,
                                0,
                                ',',
                                '.'
                            ) }}

                            pelanggaran

                        </small>

                    </div>


                    <div class="icon-box bg-danger-subtle text-danger">

                        <i class="bi bi-geo-alt-fill"></i>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- ========================================================= --}}
    {{-- FILTER YANG DIGUNAKAN --}}
    {{-- ========================================================= --}}

    <div class="col-lg-4">

        <div class="card dashboard-card h-100">

            <div class="card-body">

                <div class="d-flex justify-content-between align-items-start">

                    <div>

                        <small class="text-muted">
                            Tingkat Wilayah
                        </small>

                        <h4 class="fw-bold mt-2 mb-0">

                            {{ $dashboard['filter']['tingkatWilayah'] ?? 'Kapanewon' }}

                        </h4>

                        <small class="text-muted">

                            {{ $dashboard['filter']['jenis']
                                ? 'Jenis pelanggaran dipilih'
                                : 'Semua jenis pelanggaran'
                            }}

                        </small>

                    </div>


                    <div class="icon-box bg-warning-subtle text-warning">

                        <i class="bi bi-bar-chart-fill"></i>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>