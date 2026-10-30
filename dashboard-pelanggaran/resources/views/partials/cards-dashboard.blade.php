<div class="row g-4 mb-4">

    {{-- TOTAL PELANGGARAN --}}
    <div class="col-md-4">

        <div class="card dashboard-card h-100">

            <div class="card-body">

                <div class="d-flex align-items-center justify-content-between">

                    <div>

                        <p class="text-muted mb-1">
                            Total Pelanggaran
                        </p>

                        <h2 class="fw-bold mb-1">
                            {{ number_format($dashboard['cards']['totalPelanggaran'], 0, ',', '.') }}
                        </h2>

                        <small class="text-muted">
                            Data tahun 2024–2026
                        </small>

                    </div>

                    <div class="icon-box bg-primary bg-opacity-10 text-primary">

                        <i class="bi bi-exclamation-triangle"></i>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- JENIS DOMINAN --}}
    <div class="col-md-4">

        <div class="card dashboard-card h-100">

            <div class="card-body">

                <div class="d-flex align-items-center justify-content-between">

                    <div>

                        <p class="text-muted mb-1">
                            Jenis Pelanggaran Dominan
                        </p>

                        <h5 class="fw-bold mb-1">

                            {{ ucwords($dashboard['cards']['jenisDominan']['nama']) }}

                        </h5>

                        <small class="text-muted">

                            {{ number_format($dashboard['cards']['jenisDominan']['jumlah'], 0, ',', '.') }}
                            pelanggaran

                        </small>

                    </div>

                    <div class="icon-box bg-warning bg-opacity-10 text-warning">

                        <i class="bi bi-bar-chart-fill"></i>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- KAPANEWON TERTINGGI --}}
    <div class="col-md-4">

        <div class="card dashboard-card h-100">

            <div class="card-body">

                <div class="d-flex align-items-center justify-content-between">

                    <div>

                        <p class="text-muted mb-1">
                            Kapanewon Tertinggi
                        </p>

                        <h5 class="fw-bold mb-1">

                            {{ $dashboard['cards']['kapanewon']['nama'] }}

                        </h5>

                        <small class="text-muted">

                            {{ number_format($dashboard['cards']['kapanewon']['jumlah'], 0, ',', '.') }}
                            pelanggaran

                        </small>

                    </div>

                    <div class="icon-box bg-danger bg-opacity-10 text-danger">

                        <i class="bi bi-geo-alt-fill"></i>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


{{-- STATUS DATA 2026 --}}

<div class="alert alert-warning border-0 shadow-sm mb-4">

    <div class="d-flex align-items-center">

        <i class="bi bi-info-circle-fill me-2"></i>

        <div>

            <strong>Informasi Data 2026</strong>

            <div class="small">

                Data tahun 2026 masih dalam proses pembaruan dan dapat berubah.

            </div>

        </div>

    </div>

</div>