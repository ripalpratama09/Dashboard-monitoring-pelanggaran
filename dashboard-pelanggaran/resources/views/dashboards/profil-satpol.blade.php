@extends('layouts.app')

@section('title', 'Profil Satpol PP - Satuan Polisi Pamong Praja Kabupaten Bantul')

@section('content')

@include('partials.sidebar')

<div id="sidebarOverlay" class="sidebar-overlay"></div>

<div class="main-content">

    @include('partials.navbar')

    <div class="profile-kabupaten-page profile-satpol-page">

        <!-- =========================================================
             1. HERO BANNER PROFIL SATPOL PP
        ========================================================= -->
        <section class="kab-hero-section satpol-hero-section" style="background-image: url('{{ asset('images/baghround-profil4.png') }}');">

            <div class="kab-hero-overlay satpol-hero-overlay"></div>

            <div class="kab-hero-content">

                <img
                    src="{{ asset('images/logo-satpolpp.png') }}"
                    alt="Lambang Satuan Polisi Pamong Praja"
                    class="kab-hero-logo satpol-hero-logo">

                <h1>Profil Satuan Polisi Pamong Praja</h1>

                <p>
                    Menegakkan Peraturan Daerah, Menyelenggarakan Ketertiban Umum dan Ketenteraman Masyarakat,
                    serta Mewujudkan Pelindungan Masyarakat yang Humanis, Profesional, dan Berintegritas di Kabupaten Bantul.
                </p>

            </div>

        </section>

        <!-- =========================================================
             2. MAIN CONTENT BODY
        ========================================================= -->
        <div class="kab-content-wrapper">

            <div class="profile-container">

                <!-- SECTION 1: TENTANG SATPOL PP -->
                <section class="kab-section kab-about-section">

                    <div class="row align-items-start g-4 g-lg-5">

                        <div class="col-lg-7">
                            <h2 class="kab-section-title">Sejarah Satuan Polisi Pamong Praja </h2>
                            <div class="kab-title-line"></div>

                            <div class="kab-about-text">
                                <p>
                                    Sejarah Polisi Pamong Praja didirikan di Yogyakarta pada tanggal 3 Maret 1950 moto PRAJA WIBAWA, untuk mewadahi sebagian ketugasan pemerintah daerah. Sebenarnya ketugasan ini telah dilaksanakan pemerintah sejak zaman kolonial. Sebelum menjadi Satuan Polisi Pamong Praja setelah proklamasi kemerdekaan dimana diawali dengan kondisi yang tidak stabil dan mengancam NKRI, dibentuklah Detasemen Polisi sebagai Penjaga Keamanan Kapanewon di Yogyakarta sesuai dengan Surat Perintah Jawatan Praja di Daerah Istimewa Yogyakarta untuk menjaga ketentraman dan ketertiban masyarakat.
                                </p>

                                <p>
                                    Pada tanggal 10 November 1948, lembaga ini berubah menjadi Detasemen Polisi Pamong Praja. Wilayah Jawa dan Madura Satuan Polisi Pamong Praja dibentuk tanggal 3 Maret 1950. Inilah awal mula terbentuknya Satpol PP, dan oleh sebab itu, setiap tanggal 3 Maret ditetapkan sebagai Hari Jadi Satuan Polisi Pamong Praja (Satpol PP) dan diperingati setiap tahun.
                                </p>

                                <p>
                                    Pada Tahun 1960, dimulai pembentukan Kesatuan Polisi Pamong Praja di luar Jawa dan Madura, dengan dukungan para petinggi militer atauAngkatan Perang. Tahun 1962 namanya berubah menjadi Kesatuan Pagar Baya untuk membedakan dari korps Kepolisian Negara seperti dimaksud dalam UU No 13/1961 tentang Pokok-pokok Kepolisian. Tahun 1963 berubah nama lagi menjadi Kesatuan Pagar Praja. Istilah Satpol PP mulai terkenal sejak pemberlakuan UU No 5/1974 tentang Pokok-pokok Pemerintahan di Daerah. Pada Pasal 86 (1) disebutkan, Satpol PP merupakan perangkat wilayah yang melaksanakan tugas dekonsentrasi.
                                </p>

                                <p>
                                    Saat ini UU 5/1974 tidak berlaku lagi, digantikan UU No 22/1999 dan direvisi menjadi UU No 32/2004 tentang Pemerintahan Daerah. Dalam Pasal 148 UU 32/2004 disebutkan Polisi Pamong Praja adalah perangkat pemerintah daerah dengan tugas pokok menegakkan perda, menyelenggarakan ketertiban umum dan ketenteraman masyarakat sebagai pelaksanaan tugas desentralisasi.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="kab-about-image-card satpol-history-image">
                                <img src="{{ asset('images/baghround-profil.jpg') }}"
                                    onerror="this.onerror=null; this.src='{{ asset('images/baghround-profil2.png') }}';"
                                    alt="Satpol PP Bantul Bertugas"
                                    class="kab-about-img">
                            </div>
                        </div>

                    </div>

                </section>

                <!-- SECTION 2: VISI & MISI SATPOL PP -->
                <section class="kab-section kab-visi-misi-section">

                    <div class="text-center mb-4">
                        <h2 class="kab-section-title text-center">Visi &amp; Misi Satpol PP</h2>
                        <div class="kab-title-line mx-auto"></div>
                    </div>

                    <div class="kab-visi-misi-grid">

                        <!-- Card 1: Visi -->
                        <div class="kab-card-visi">
                            <div class="kab-visi-icon-wrap" style="background: #fef3c7; color: #d97706;">
                                <i class="bi bi-shield-fill-check"></i>
                            </div>

                            <h3 class="kab-card-heading">Visi</h3>

                            <div class="kab-visi-quote">
                                &ldquo;"Menjadi Penegak Peraturan Perundang-Undangan Daerah yang Professional untuk terwujudnya Masyarakat Kabupaten Bantul yang tertib dan tenteram"&rdquo;
                            </div>
                        </div>

                        <!-- Card 2: Misi -->
                        <div class="kab-card-misi">
                            <div class="d-flex align-items-center gap-2 mb-3">
                                <div class="kab-misi-icon-wrap">
                                    <i class="bi bi-list-check"></i>
                                </div>
                                <h3 class="kab-card-heading mb-0">Misi</h3>
                            </div>

                            <ol class="kab-misi-list">
                                <li>
                                    Meningkatkan kapasitas sumber daya aparatur dan budaya kerja yang responsive.
                                </li>
                                <li>
                                    Mewujudkan penegakkan peraturan perundang-undangan daerah yang demokratis dan partisipatif.
                                </li>
                                <li>
                                    Membangun sinergitas dengan organisasi perangkat daerah dan masyarakat untuk mendukung terciptanya ketertiban umum dan ketentraman masyarakat.
                                </li>
                            </ol>
                        </div>

                    </div>

                </section>

                <!-- SECTION 3: TUGAS POKOK & FUNGSI UTAMA -->
                <section class="kab-section satpol-tupoksi-section">

                    <div class="text-center mb-4">
                        <h2 class="kab-section-title text-center">Tugas Pokok &amp; Fungsi Utama</h2>
                        <div class="kab-title-line mx-auto"></div>
                        <p class="satpol-tupoksi-intro text-center">
                            Satpol PP mempunyai tugas membantu Bupati melaksanakan urusan pemerintahan bidang ketenteraman dan ketertiban umum serta perlindungan masyarakat.
                        </p>
                    </div>

                    <div class="row g-4 justify-content-center satpol-fungsi-row">

                        <!-- Kotak 1: Fungsi a -->
                        <div class="col-lg-4 col-md-6 d-flex">
                            <div class="satpol-fungsi-box satpol-box-amber">
                                <div class="satpol-fungsi-header">
                                    <div class="satpol-fungsi-icon icon-amber">
                                        <i class="bi bi-journal-text"></i>
                                    </div>

                                </div>
                                <div class="satpol-fungsi-content">
                                    <p class="satpol-fungsi-desc">
                                        <span class="satpol-point-tag"></span>Penyusunan program dan pelaksanaan penegakan Peraturan Daerah dan Peraturan Bupati, penyelenggaraan ketertiban umum, ketenteraman masyarakat serta perlindungan masyarakat.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Kotak 2: Fungsi b -->
                        <div class="col-lg-4 col-md-6 d-flex">
                            <div class="satpol-fungsi-box satpol-box-blue">
                                <div class="satpol-fungsi-header">
                                    <div class="satpol-fungsi-icon icon-blue">
                                        <i class="bi bi-shield-check"></i>
                                    </div>

                                </div>
                                <div class="satpol-fungsi-content">
                                    <p class="satpol-fungsi-desc">
                                        <span class="satpol-point-tag"></span>Pelaksanaan kebijakan penegakan Peraturan Daerah dan Peraturan Bupati, ketertiban umum, ketenteraman masyarakat serta perlindungan masyarakat.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Kotak 3: Fungsi c -->
                        <div class="col-lg-4 col-md-6 d-flex">
                            <div class="satpol-fungsi-box satpol-box-indigo">
                                <div class="satpol-fungsi-header">
                                    <div class="satpol-fungsi-icon icon-indigo">
                                        <i class="bi bi-diagram-3-fill"></i>
                                    </div>

                                </div>
                                <div class="satpol-fungsi-content">
                                    <p class="satpol-fungsi-desc">
                                        <span class="satpol-point-tag"></span>Pelaksanaan koordinasi, pemantauan, evaluasi dan pelaporan pelaksanaan penegakan Peraturan Daerah dan Peraturan Bupati, ketertiban umum, ketenteraman masyarakat serta perlindungan masyarakat.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Kotak 4: Fungsi d -->
                        <div class="col-lg-4 col-md-6 d-flex">
                            <div class="satpol-fungsi-box satpol-box-green">
                                <div class="satpol-fungsi-header">
                                    <div class="satpol-fungsi-icon icon-green">
                                        <i class="bi bi-folder2-open"></i>
                                    </div>

                                </div>
                                <div class="satpol-fungsi-content">
                                    <p class="satpol-fungsi-desc">
                                        <span class="satpol-point-tag"></span>Pelaksanaan administrasi pada Satpol PP.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Kotak 5: Fungsi e -->
                        <div class="col-lg-4 col-md-6 d-flex">
                            <div class="satpol-fungsi-box satpol-box-cyan">
                                <div class="satpol-fungsi-header">
                                    <div class="satpol-fungsi-icon icon-cyan">
                                        <i class="bi bi-briefcase-fill"></i>
                                    </div>

                                </div>
                                <div class="satpol-fungsi-content">
                                    <p class="satpol-fungsi-desc">
                                        <span class="satpol-point-tag"></span>Pelaksanaan fungsi lain yang diberikan oleh Bupati sesuai dengan bidang tugasnya.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                </section>

                <!-- SECTION 4: STRUKTUR ORGANISASI SATPOL PP -->
                <section class="kab-section satpol-structure-section">

                    <div class="text-center mb-4">
                        <h2 class="kab-section-title text-center">Struktur Organisasi</h2>
                        <div class="kab-title-line mx-auto"></div>
                    </div>

                    <div class="satpol-structure-container">
                        <div class="satpol-structure-card">
                            <a href="{{ asset('images/Struktur-organisasi-satpolpp.png') }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="satpol-structure-link"
                                title="Klik untuk memperbesar gambar struktur organisasi">
                                <img src="{{ asset('images/Struktur-organisasi-satpolpp.png') }}"
                                    onerror="this.onerror=null; this.src='{{ asset('images/struktur-organisasi-satpolpp.png') }}';"
                                    alt="Bagan Struktur Organisasi Satuan Polisi Pamong Praja Kabupaten Bantul"
                                    class="satpol-structure-img">
                                <div class="satpol-structure-overlay">
                                    <span><i class="bi bi-arrows-fullscreen me-2"></i>Klik untuk melihat ukuran penuh</span>
                                </div>
                            </a>
                        </div>
                    </div>

                </section>

                <!-- SECTION 6: JURNAL & BERITA SATPOL PP -->
                <section class="kab-section kab-news-section">

                    <div class="kab-news-header">
                        <div>
                            <h2 class="kab-section-title mb-0">Jurnal &amp; Berita Satpol PP</h2>
                            <div class="kab-title-line"></div>
                        </div>

                        <button type="button" class="kab-see-all-btn" data-bs-toggle="modal" data-bs-target="#modalSemuaBeritaSatpol">
                            Lihat Semua <i class="bi bi-arrow-right"></i>
                        </button>
                    </div>

                    <div class="kab-news-grid">

                        <!-- Jurnal kegiatan -->
                        <div class="kab-news-card">
                            <span class="kab-news-badge" style="background: #ede9fe; color: #6d28d9;">JURNAL KEGIATAN</span>

                            <h4 class="mb-2">
                                <a href="{{ route('berita.detail', 8) }}" class="kab-news-card-title">
                                    Catatan Lapangan: Pendekatan Humanis dalam Penertiban
                                </a>
                            </h4>

                            <p class="kab-news-card-desc">
                                Dokumentasi praktik dialog, edukasi, dan koordinasi petugas saat melaksanakan penertiban agar hak masyarakat tetap diperhatikan.
                            </p>

                            <div class="kab-news-card-footer">
                                <span class="kab-news-card-date">15 Okt 2024</span>
                                <a href="{{ route('berita.detail', 8) }}" class="kab-news-card-link">
                                    Baca &rarr;
                                </a>
                            </div>
                        </div>

                        <!-- Berita 1 -->
                        <div class="kab-news-card">
                            <span class="kab-news-badge" style="background: #fee2e2; color: #b91c1c;">KETERTIBAN</span>

                            <h4 class="mb-2">
                                <a href="{{ route('berita.detail', 4) }}" class="kab-news-card-title">
                                    Operasi Simpatik Penegakan Perda Trantibum di Kawasan Perkotaan
                                </a>
                            </h4>

                            <p class="kab-news-card-desc">
                                Satpol PP Bantul mengintensifkan patroli simpatik guna memastikan kenyamanan ruang publik dan kepatuhan pelaku usaha terhadap izin penyelenggaraan...
                            </p>

                            <div class="kab-news-card-footer">
                                <span class="kab-news-card-date">05 Okt 2024</span>
                                <a href="{{ route('berita.detail', 4) }}" class="kab-news-card-link">
                                    Baca &rarr;
                                </a>
                            </div>
                        </div>

                        <!-- Berita 2 -->
                        <div class="kab-news-card">
                            <span class="kab-news-badge" style="background: #e0f2fe; color: #0369a1;">PEMERINTAHAN</span>

                            <h4 class="mb-2">
                                <a href="{{ route('berita.detail', 1) }}" class="kab-news-card-title">
                                    Rapat Koordinasi Lintas Sektoral Penegakan Regulasi Daerah
                                </a>
                            </h4>

                            <p class="kab-news-card-desc">
                                Sinergi bersama jajaran aparat penegak hukum dan instansi teknis dalam optimalisasi pengawasan kepatuhan perda tata ruang dan ketertiban umum...
                            </p>

                            <div class="kab-news-card-footer">
                                <span class="kab-news-card-date">12 Okt 2024</span>
                                <a href="{{ route('berita.detail', 1) }}" class="kab-news-card-link">
                                    Baca &rarr;
                                </a>
                            </div>
                        </div>

                        <!-- Berita 3 -->
                        <div class="kab-news-card">
                            <span class="kab-news-badge" style="background: #e0e7ff; color: #4338ca;">LAYANAN</span>

                            <h4 class="mb-2">
                                <a href="{{ route('berita.detail', 3) }}" class="kab-news-card-title">
                                    Peluncuran Layanan Pengaduan Cepat Gangguan Ketertiban Umum
                                </a>
                            </h4>

                            <p class="kab-news-card-desc">
                                Kanal respons cepat bagi masyarakat Bantul untuk melaporkan gangguan ketertiban umum secara online melalui integrasi data terpadu...
                            </p>

                            <div class="kab-news-card-footer">
                                <span class="kab-news-card-date">08 Okt 2024</span>
                                <a href="{{ route('berita.detail', 3) }}" class="kab-news-card-link">
                                    Baca &rarr;
                                </a>
                            </div>
                        </div>

                    </div>

                </section>

            </div>

        </div>

        <!-- =========================================================
             3. FOOTER SECTION
        ========================================================= -->
        <footer class="profile-footer">

            <div class="profile-footer-container">

                <!-- SISI KIRI: 2 LOGO + BRAND DESCRIPTION -->
                <div class="footer-brand-section">

                    <!-- BAGIAN 2 LOGO -->
                    <div class="footer-logos-group">

                        <!-- Logo 1: Logo Sedata Bantul (dengan background putih) -->
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

                    <h4 class="footer-brand-title">Satuan Polisi Pamong Praja</h4>

                    <p class="footer-brand-desc">
                        Pemerintah Kabupaten Bantul &mdash; Berkomitmen memberikan rasa aman, tertib, dan damai bagi seluruh warga masyarakat Kabupaten Bantul.
                    </p>

                </div>

                <!-- SISI KANAN: HUBUNGI KAMI -->
                <div class="footer-contact-section">

                    <h5 class="footer-col-title">Hubungi Kami</h5>

                    <ul class="footer-contact-list">
                        <li class="footer-contact-item">
                            <i class="bi bi-geo-alt-fill"></i>
                            <span>Komplek Pemda II Bantul, Jl. Tentara Pelajar Lingkungan Timur, Manding, Trirenggo, Bantul, Daerah Istimewa Yogyakarta 55711</span>
                        </li>

                        <li class="footer-contact-item">
                            <i class="bi bi-telephone-fill"></i>
                            <a href="tel:02743675097">(0274) 3675097</a>
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

<!-- =========================================================
     MODAL POPUP: SEMUA BERITA PROFIL SATPOL PP
========================================================= -->
<div class="modal fade" id="modalSemuaBeritaSatpol" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">
            <div class="modal-header border-0 py-3 px-4 bg-light">
                <h5 class="modal-title fw-bold text-dark mb-0">Publikasi &amp; Kegiatan Satpol PP Bantul</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body px-4 py-4">
                <p class="text-muted mb-3">Daftar arsip kegiatan resmi Satuan Polisi Pamong Praja Kabupaten Bantul.</p>

                <div class="list-group list-group-flush gap-2">
                    <a href="{{ route('berita.detail', 8) }}" class="list-group-item list-group-item-action rounded-3 border p-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <span class="kab-news-badge" style="background: #ede9fe; color: #6d28d9;">JURNAL KEGIATAN</span>
                            <small class="text-muted">15 Okt 2024</small>
                        </div>
                        <h6 class="fw-bold mb-1 text-dark">Catatan Lapangan: Pendekatan Humanis dalam Penertiban</h6>
                        <small class="text-secondary">Dokumentasi praktik dialog, edukasi, dan koordinasi petugas dalam menjaga ketertiban umum.</small>
                    </a>

                    <a href="{{ route('berita.detail', 4) }}" class="list-group-item list-group-item-action rounded-3 border p-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <span class="kab-news-badge" style="background: #fee2e2; color: #b91c1c;">KETERTIBAN</span>
                            <small class="text-muted">05 Okt 2024</small>
                        </div>
                        <h6 class="fw-bold mb-1 text-dark">Operasi Simpatik Penegakan Perda Trantibum</h6>
                        <small class="text-secondary">Satpol PP Bantul mengintensifkan patroli simpatik guna memastikan kenyamanan ruang publik dan kepatuhan pelaku usaha...</small>
                    </a>

                    <a href="{{ route('berita.detail', 1) }}" class="list-group-item list-group-item-action rounded-3 border p-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <span class="kab-news-badge" style="background: #e0f2fe; color: #0369a1;">PEMERINTAHAN</span>
                            <small class="text-muted">12 Okt 2024</small>
                        </div>
                        <h6 class="fw-bold mb-1 text-dark">Rapat Koordinasi Pembangunan Infrastruktur &amp; Ketertiban Wilayah</h6>
                        <small class="text-secondary">Pemerintah Kabupaten menggelar rapat koordinasi untuk membahas rencana percepatan dan pengawasan ketertiban wilayah...</small>
                    </a>

                    <a href="{{ route('berita.detail', 3) }}" class="list-group-item list-group-item-action rounded-3 border p-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <span class="kab-news-badge" style="background: #e0e7ff; color: #4338ca;">LAYANAN</span>
                            <small class="text-muted">08 Okt 2024</small>
                        </div>
                        <h6 class="fw-bold mb-1 text-dark">Peluncuran Aplikasi Pelayanan Publik Terpadu</h6>
                        <small class="text-secondary">Aplikasi baru diluncurkan untuk mempermudah masyarakat dalam mengurus perizinan dan aduan ketertiban umum...</small>
                    </a>
                </div>
            </div>

            <div class="modal-footer border-0 px-4 pb-3">
                <button type="button" class="btn btn-secondary px-4 rounded-3" data-bs-dismiss="modal">
                    Tutup
                </button>
            </div>
        </div>
    </div>
</div>

@endsection