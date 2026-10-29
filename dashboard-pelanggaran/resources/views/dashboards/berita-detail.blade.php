@extends('layouts.app')

@section('title', $berita['title'] . ' - Monitoring Data Pelanggaran Kabupaten Bantul')

@section('content')

@include('partials.sidebar')

<div id="sidebarOverlay" class="sidebar-overlay"></div>

<div class="main-content">

    @include('partials.navbar')

    <div class="berita-detail-page">

        <!-- =========================================================
             1. HEADER BANNER DETAIL BERITA (CENTERED & PROPORTIONAL)
        ========================================================= -->
        <header class="berita-header-section">
            <div class="berita-header-container">

                <div class="berita-meta-top">
                    <span class="news-badge {{ $berita['badgeClass'] }}">
                        {{ $berita['category'] }}
                    </span>
                    <span class="berita-meta-item">
                        <i class="bi bi-calendar3"></i> {{ $berita['date'] }}
                    </span>
                </div>

                <h1 class="berita-main-title">
                    {{ $berita['title'] }}
                </h1>

            </div>
        </header>

        <!-- =========================================================
             2. ISI UTAMA (2 KOLOM: KONTEN KIRI & SIDEBAR KANAN)
        ========================================================= -->
        <div class="berita-content-wrapper">
            <div class="berita-container">

                <div class="row g-4 g-lg-5">

                    <!-- =====================================================
                         KOLOM KIRI: FOTO BERITA & TEKS LENGKAP (LANGSUNG DI HALAMAN)
                    ====================================================== -->
                    <div class="col-lg-8">

                        <article class="berita-article-body">

                            <!-- Foto Utama Berita -->
                            <div class="berita-featured-image-box">
                                <img src="{{ asset($berita['image']) }}"
                                     alt="{{ $berita['title'] }}"
                                     class="berita-featured-img">
                            </div>

                            <!-- Teks Lengkap Berita -->
                            <div class="berita-article-text">
                                {!! $berita['content'] !!}
                            </div>

                            <!-- Footer Berita / Tags -->
                            <div class="berita-article-footer">
                                <div class="d-flex align-items-center gap-2 flex-wrap">
                                    <span class="text-muted small fw-bold">Topik:</span>
                                    <span class="badge bg-light text-dark border">#KabupatenBantul</span>
                                    <span class="badge bg-light text-dark border">#{{ str_replace(' ', '', $berita['category']) }}</span>
                                    <span class="badge bg-light text-dark border">#SatpolPPBantul</span>
                                </div>
                            </div>

                        </article>

                    </div>

                    <!-- =====================================================
                         KOLOM KANAN: SIDEBAR "BERITA TERBARU"
                    ====================================================== -->
                    <div class="col-lg-4">

                        <aside class="berita-sidebar">

                            <div class="berita-sidebar-card">

                                <h3 class="berita-sidebar-heading">
                                    Berita Terbaru
                                </h3>

                                <div class="berita-sidebar-list">
                                    @foreach($beritaLainnya as $item)
                                        <a href="{{ route('berita.detail', $item['id']) }}" class="berita-sidebar-item">
                                            <div class="berita-sidebar-thumb">
                                                <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}">
                                            </div>

                                            <div class="berita-sidebar-info">
                                                <div class="d-flex align-items-center gap-2 mb-1">
                                                    <span class="news-badge {{ $item['badgeClass'] }}" style="font-size: 10px; padding: 2px 6px;">
                                                        {{ $item['category'] }}
                                                    </span>
                                                    <span class="text-muted" style="font-size: 11px;">
                                                        {{ $item['date'] }}
                                                    </span>
                                                </div>

                                                <h4 class="berita-sidebar-item-title">
                                                    {{ $item['title'] }}
                                                </h4>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>

                                <div class="mt-4 pt-3 border-top">
                                    <a href="{{ route('profil') }}#profil-section" class="btn btn-primary w-100 rounded-3 py-2 fw-semibold" style="font-size: 13.5px;">
                                        Lihat Semua Berita &amp; Jurnal <i class="bi bi-arrow-right ms-1"></i>
                                    </a>
                                </div>

                            </div>

                        </aside>

                    </div>

                </div>

            </div>
        </div>

        <!-- =========================================================
             3. FOOTER SECTION
        ========================================================= -->
        <footer class="profile-footer">

            <div class="profile-footer-container">

                <!-- SISI KIRI: 2 LOGO + BRAND DESCRIPTION -->
                <div class="footer-brand-section">

                    <div class="footer-logos-group">

                        <!-- Logo 1: Logo Sedata Bantul -->
                        <div class="footer-logo-box footer-logo-sedata" title="Sedata Sebantul (Satu Data Bantul)">
                            <img src="{{ asset('images/logosedatateks.png') }}"
                                 onerror="this.onerror=null; this.src='{{ asset('images/logosedata.png') }}';"
                                 alt="Logo Sedata Kabupaten Bantul"
                                 style="height: 38px; width: auto; max-height: 38px; object-fit: contain; display: block;">
                        </div>

                        <!-- Logo 2: Logo Satpol PP Bantul (tanpa kotak putih) -->
                        <div class="footer-logo-satpol-plain" title="Satpol PP Kabupaten Bantul" style="height: 52px; display: inline-flex; align-items: center; justify-content: center; background: transparent; border: none; padding: 0;">
                            <img src="{{ asset('images/logo-satpolpp.png') }}"
                                 alt="Logo Satpol PP Bantul"
                                 style="height: 52px; width: auto; max-height: 52px; max-width: 60px; object-fit: contain; display: block; background: transparent; filter: drop-shadow(0 3px 6px rgba(0,0,0,0.4));">
                        </div>

                    </div>

                    <h4 class="footer-brand-title">Kabupaten Bantul</h4>

                    <p class="footer-brand-desc">
                        Portal resmi penyedia informasi dan layanan publik
                        terpadu untuk kesejahteraan masyarakat.
                    </p>

                </div>

                <!-- SISI KANAN: HUBUNGI KAMI -->
                <div class="footer-contact-section">

                    <h5 class="footer-col-title">Hubungi Kami</h5>

                    <ul class="footer-contact-list">
                        <li class="footer-contact-item">
                            <i class="bi bi-geo-alt-fill"></i>
                            <span>Kompleks Perkantoran Pemda Bantul, Manding, Trirenggo, Kec. Bantul, DIY 55714</span>
                        </li>

                        <li class="footer-contact-item">
                            <i class="bi bi-telephone-fill"></i>
                            <a href="tel:0211234567">(021) 123-4567 / (0274) 367509</a>
                        </li>

                        <li class="footer-contact-item">
                            <i class="bi bi-envelope-fill"></i>
                            <a href="mailto:satpolpp@bantulkab.go.id">satpolpp@bantulkab.go.id</a>
                        </li>
                    </ul>

                </div>

            </div>

            <!-- COPYRIGHT BAR BAWAH -->
            <div class="footer-bottom-bar">
                <div>
                    &copy; {{ date('Y') }} Pemerintah Kabupaten Bantul &mdash; Satuan Polisi Pamong Praja. All rights reserved.
                </div>
                <div class="d-flex gap-3 flex-wrap">
                    <a href="{{ route('profil') }}" class="text-muted text-decoration-none">Home</a>
                    <a href="{{ route('profil.kabupaten') }}" class="text-muted text-decoration-none">Profil Kabupaten</a>
                    <a href="{{ route('profil.satpol') }}" class="text-muted text-decoration-none">Profil Satpol PP</a>
                    <a href="{{ route('dashboard') }}" class="text-muted text-decoration-none">Dashboard</a>
                    <a href="{{ route('peta') }}" class="text-muted text-decoration-none">Peta Wilayah</a>
                    <a href="{{ route('data') }}" class="text-muted text-decoration-none">Data Terbuka</a>
                </div>
            </div>

        </footer>

    </div>

</div>

@endsection
