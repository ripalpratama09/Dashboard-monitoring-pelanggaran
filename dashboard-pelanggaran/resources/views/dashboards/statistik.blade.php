@extends('layouts.app')

@section('title', 'Statistik')

@section('content')

@include('partials.sidebar')

<div id="sidebarOverlay" class="sidebar-overlay"></div>

<div class="main-content">

    @include('partials.navbar')

    <div class="container-fluid p-4">

        {{-- ========================================================= --}}
        {{-- FILTER STATISTIK --}}
        {{-- ========================================================= --}}

        @include('partials.filter')


        {{-- ========================================================= --}}
        {{-- HASIL STATISTIK --}}
        {{-- ========================================================= --}}

        @if($dashboard !== null)

        {{-- Cards --}}
        @include('partials.cards-statistik')

        {{-- Grafik khusus Statistik --}}
        @include('partials.charts-statistik')

        @else

        {{-- ===================================================== --}}
        {{-- EMPTY STATE --}}
        {{-- ===================================================== --}}

        <div class="card border-0 shadow-sm">

            <div class="card-body text-center py-5">

                <div class="mb-3">

                    <i
                        class="bi bi-bar-chart-line"
                        style="
                                font-size: 48px;
                                color: #2563eb;
                            ">
                    </i>

                </div>

                <h4 class="fw-bold">
                    Pilih Filter Statistik
                </h4>

                <p class="text-muted mb-0">

                    Silakan pilih tahun, jenis pelanggaran,
                    tingkat wilayah, dan wilayah untuk melihat
                    hasil statistik.

                </p>

            </div>

        </div>

        @endif

    </div>

</div>

@endsection