<div class="card chart-card">

    <div class="card-body">

        <div style="position: relative; height: 350px;">

            <canvas
                id="trendChart"
                data-labels='@json($dashboard["charts"]["line"]["labels"] ?? [])'
                data-chart='@json($dashboard["charts"]["line"]["data"] ?? [])'>
            </canvas>

        </div>

    </div>

</div>