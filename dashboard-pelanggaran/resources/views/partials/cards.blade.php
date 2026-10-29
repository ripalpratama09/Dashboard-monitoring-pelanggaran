<div class="row g-4 mb-4">

    <!-- Total Pelanggaran -->
    <div class="col-lg-3 col-md-6">

        <div class="card dashboard-card">

            <div class="card-body d-flex justify-content-between align-items-center">

                <div>

                    <small class="text-muted">
                        Total Pelanggaran
                    </small>

                    <h3 class="fw-bold mt-2 mb-0">
                        {{ number_format($dashboard['cards']['totalPelanggaran'],0,',','.') }}
                    </h3>

                </div>

                <div class="icon-box bg-primary-subtle text-primary">
                    <i class="bi bi-exclamation-triangle-fill"></i>
                </div>

            </div>

        </div>

    </div>

    <!-- Total Kecelakaan -->
    <div class="col-lg-3 col-md-6">

        <div class="card dashboard-card">

            <div class="card-body d-flex justify-content-between align-items-center">

                <div>

                    <small class="text-muted">
                        Total Kecelakaan
                    </small>

                    <h3 class="fw-bold mt-2 mb-0">
                        {{ number_format($dashboard['cards']['totalKecelakaan'],0,',','.') }}
                    </h3>

                </div>

                <div class="icon-box bg-danger-subtle text-danger">
                    <i class="bi bi-car-front-fill"></i>
                </div>

            </div>

        </div>

    </div>

    <!-- Data Tahun -->
    <div class="col-lg-3 col-md-6">

        <div class="card dashboard-card">

            <div class="card-body d-flex justify-content-between align-items-center">

                <div>

                    <small class="text-muted">
                        Data Tahun
                    </small>

                    <h3 class="fw-bold mt-2 mb-0">
                        {{ $dashboard['cards']['tahun'] }}
                    </h3>

                </div>

                <div class="icon-box bg-warning-subtle text-warning">
                    <i class="bi bi-calendar-event-fill"></i>
                </div>

            </div>

        </div>

    </div>

    <!-- Informasi Kapanewon -->
    <div class="col-lg-3 col-md-6">

        <div class="card dashboard-card">

            <div class="card-body d-flex justify-content-between align-items-start">

                <div>

                    <small class="text-muted">
                        Kapanewon :
                        <strong>{{ $dashboard['cards']['kapanewon']['nama'] }}</strong>
                    </small>

                    <p class="small text-muted mt-2 mb-0">
                        {{ $dashboard['cards']['kapanewon']['keterangan'] }}
                    </p>

                </div>

                <div class="icon-box bg-success-subtle text-success">
                    <i class="bi bi-geo-alt-fill"></i>
                </div>

            </div>

        </div>

    </div>

</div>