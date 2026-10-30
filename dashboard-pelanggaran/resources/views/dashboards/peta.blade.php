@extends('layouts.app')

@section('title', 'Peta')

@section('content')

@include('partials.sidebar')

<div id="sidebarOverlay" class="sidebar-overlay"></div>

<div class="main-content">

    @include('partials.navbar')

    <div class="container-fluid p-4">

        <div class="card shadow-sm border-0">

            <div class="card-body">

                <div class="mb-3">

                    <h4 class="fw-bold mb-1">
                        Total Pelanggaran di Kabupaten Bantul Menurut Kapanewon Tahun 2026
                    </h4>

                    <p class="text-muted mb-0">
                        Data yang ditampilkan mencakup total pelanggaran yang terdiri dari pelanggaran: Gelandangan & Pengemis, Lingkungan, Minuman Beralkohol, Pedagang Kaki Lima, Pelacuran, Reklame, Sampah dan Tantribum.
                    </p>

                </div>

                <div
                    id="map"
                    data-map='@json($dashboard["map"] ?? [])'>
                </div>

            </div>

        </div>

    </div>

</div>

@endsection