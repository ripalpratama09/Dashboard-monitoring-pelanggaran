<div class="card chart-card h-100">

    <div class="card-header bg-white border-0 py-3">

        <h5 class="fw-bold mb-1">
            Top 5 Kapanewon
        </h5>

        <small class="text-muted">
            Berdasarkan jumlah pelanggaran
        </small>

    </div>

    <div class="card-body">

        @foreach($dashboard['ranking'] as $index => $item)

        <div class="ranking-item">

            <div class="d-flex align-items-center justify-content-between mb-2">

                <div class="d-flex align-items-center">

                    <span class="ranking-number">
                        {{ $index + 1 }}
                    </span>

                    <span>
                        {{ $item['nama'] }}
                    </span>

                </div>

                <strong>
                    {{ number_format($item['jumlah'], 0, ',', '.') }}
                </strong>

            </div>


            <div class="progress">

                <div
                    class="progress-bar"
                    role="progressbar"
                    style="width: {{ $dashboard['ranking'][0]['jumlah'] > 0 ? ($item['jumlah'] / $dashboard['ranking'][0]['jumlah']) * 100 : 0 }}%">
                </div>

            </div>

        </div>

        @endforeach

    </div>

</div>