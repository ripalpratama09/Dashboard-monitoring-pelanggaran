{{-- ========================================================= --}}
{{-- PERBANDINGAN WILAYAH + JENIS PELANGGARAN --}}
{{-- ========================================================= --}}

<div class="statistik-grid">

    {{-- ===================================================== --}}
    {{-- PERBANDINGAN WILAYAH --}}
    {{-- ===================================================== --}}

    <div class="statistik-card">

        <div class="card-header d-flex justify-content-between align-items-start">

            <div>

                <h5 class="mb-1">
                    Perbandingan Pelanggaran
                </h5>

                <small>
                    Berdasarkan
                    {{ strtolower($dashboard['filter']['tingkatWilayah'] ?? 'wilayah') }}
                </small>

            </div>

            <div class="stat-chart-icon bg-primary-subtle text-primary">

                <i class="bi bi-bar-chart-fill"></i>

            </div>

        </div>


        <div class="card-body">

            <div class="statistik-chart-wrapper wilayah">

                <canvas
                    id="statistikWilayahChart"

                    data-labels='@json(
                        $dashboard["charts"]["bar"]["labels"] ?? []
                    )'

                    data-chart='@json(
                        $dashboard["charts"]["bar"]["data"] ?? []
                    )'>
                </canvas>

            </div>

        </div>

    </div>


    {{-- ===================================================== --}}
    {{-- JENIS PELANGGARAN --}}
    {{-- ===================================================== --}}

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

            <div class="stat-chart-icon bg-warning-subtle text-warning">

                <i class="bi bi-pie-chart-fill"></i>

            </div>

        </div>


        <div class="card-body">

            <div class="statistik-chart-wrapper jenis">

                <canvas
                    id="statistikJenisChart"

                    data-labels='@json(
                        $dashboard["charts"]["jenis"]["labels"] ?? []
                    )'

                    data-chart='@json(
                        $dashboard["charts"]["jenis"]["data"] ?? []
                    )'>
                </canvas>

            </div>

        </div>

    </div>

</div>



{{-- ========================================================= --}}
{{-- TREN + TOP 5 --}}
{{-- ========================================================= --}}

<div class="statistik-grid">

    {{-- ===================================================== --}}
    {{-- TREN --}}
    {{-- ===================================================== --}}

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

            <div class="stat-chart-icon bg-info-subtle text-info">

                <i class="bi bi-graph-up-arrow"></i>

            </div>

        </div>


        <div class="card-body">

            <div class="statistik-chart-wrapper trend">

                <canvas
                    id="statistikTrendChart"

                    data-labels='@json(
                        $dashboard["charts"]["line"]["labels"] ?? []
                    )'

                    data-chart='@json(
                        $dashboard["charts"]["line"]["data"] ?? []
                    )'>
                </canvas>

            </div>

        </div>

    </div>


    {{-- ===================================================== --}}
    {{-- TOP 5 --}}
    {{-- ===================================================== --}}

    <div class="statistik-card statistik-ranking">

        <div class="card-header d-flex justify-content-between align-items-start">

            <div>

                <h5 class="mb-1">
                    Top 5 Wilayah
                </h5>

                <small>
                    Wilayah dengan pelanggaran tertinggi
                </small>

            </div>

            <div class="stat-chart-icon bg-danger-subtle text-danger">

                <i class="bi bi-trophy-fill"></i>

            </div>

        </div>


        <div class="card-body">

            @if(!empty($dashboard['ranking']))

            @foreach(
            array_slice($dashboard['ranking'], 0, 5)
            as $index => $item
            )

            <div class="statistik-ranking-item">

                <div class="statistik-ranking-number">

                    {{ $index + 1 }}

                </div>


                <div class="statistik-ranking-name">

                    {{ $item['nama'] }}

                </div>


                <div class="statistik-ranking-value">

                    {{ number_format(
                                $item['jumlah'],
                                0,
                                ',',
                                '.'
                            ) }}

                </div>

            </div>

            @endforeach

            @else

            <div class="text-center text-muted py-5">

                <i class="bi bi-bar-chart fs-2"></i>

                <div class="mt-2">
                    Tidak ada data
                </div>

            </div>

            @endif

        </div>

    </div>

</div>