@extends('layouts.app')

@section('title', 'Profil Kabupaten - Pemerintah Kabupaten Bantul')

@section('content')

@include('partials.sidebar')

<div id="sidebarOverlay" class="sidebar-overlay"></div>

<div class="main-content">

    @include('partials.navbar')

    <div class="profile-kabupaten-page">

        <!-- =========================================================
             1. HERO BANNER PROFIL KABUPATEN
        ========================================================= -->
        <section class="kab-hero-section" style="background-image: url('{{ asset('images/baghround-profil2.png') }}');">

            <div class="kab-hero-overlay"></div>

            <div class="kab-hero-content">

                <img
                    src="{{ asset('images/LogoBantul.png') }}"
                    alt="Lambang Kabupaten Bantul"
                    class="kab-hero-logo">

                <h1>Profil Kabupaten Bantul</h1>

                <p>
                    Mengenal lebih dekat sejarah, visi, dan pencapaian daerah kita untuk
                    membangun masa depan yang lebih baik bersama seluruh elemen masyarakat.
                </p>

            </div>

        </section>

        <!-- =========================================================
             2. MAIN CONTENT BODY
        ========================================================= -->
        <div class="kab-content-wrapper">

            <div class="profile-container">

                <!-- SECTION: TENTANG KABUPATEN -->
                <section class="kab-section kab-about-section">

                    <div class="row align-items-start g-4 g-lg-5">

                        <div class="col-lg-7">
                            <h2 class="kab-section-title">Tentang Kabupaten</h2>
                            <div class="kab-title-line"></div>

                            <div class="kab-about-text">
                                <p>
                                    Bantul memang tak bisa dilepaskan dari sejarah Yogyakarta sebagai kota perjuangan dan sejarah perjuangan Indonesia pada umumnya. Bantul menyimpan banyak kisah kepahlawanan. Antara lain, perlawanan Pangeran Mangkubumi di Ambar Ketawang dan upaya pertahanan Sultan Agung di Pleret. Perjuangan Pangeran Diponegoro di Selarong. Kisah perjuangan pioner penerbangan Indonesia yaitu Adisucipto, pesawat yang ditumpanginya jatuh ditembak Belanda di Desa Ngoto. Sebuah peristiwa yang penting dicatat adalah Perang Gerilya melawan pasukan Belanda yang dipimpin oleh Jenderal Sudirman (1948) yang banyak bergerak di sekitar wilayah Bantul. Wilayah ini pula yang menjadi basis, "Serangan Oemoem 1 Maret" (1949) yang dicetuskan oleh Sri Sultan Hamengkubuwono IX.
                                </p>

                                <p>
                                    Tolok awal pembentukan wilayah Kabupaten Bantul adalah perjuangan gigih Pangeran Diponegoro melawan penjajah bermarkas di Selarong sejak tahun 1825 hingga 1830. Seusai meredam perjuangan Diponegoro, Pemeritah Hindia Belanda kemudian membentuk komisi khusus untuk menangani daerah Vortenlanden yang antara lain bertugas menangani pemerintahan daerah Mataram, Pajang, Sokawati, dan Gunung Kidul. Kontrak kasunanan Surakarta dengan Yogyakarta dilakukan baik hal pembagian wilayah maupun pembayaran ongkos perang, penyerahan pemimpin pemberontak, dan pembentukan wilayah administratif.
                                </p>

                                <p>
                                    Tanggal 26 dan 31 Maret 1831 Pemerintah Hindia Belanda dan Sultan Yogyakarta mengadakan kontrak kerja sama tentang pembagian wilayah administratif baru dalam Kasultanan disertai penetapan jabatan kepala wilayahnya. Saat itu Kasultanan Yogyakarta dibagi menjadi tiga kabupaten yaitu Bantulkarang untuk kawasan selatan, Denggung untuk kawasan utara, dan Kalasan untuk kawasan timur. Menindaklanjuti pembagian wilayah baru Kasultanan Yogyakarta, tanggal 20 Juli 1831 atau Rabu Kliwon 10 sapar tahun Dal 1759 (Jawa) secara resmi ditetapkan pembentukan Kabupaten Bantul yang sebelumnya di kenal bernama Bantulkarang. Seorang Nayaka Kasultanan Yogyakarata bernama Raden Tumenggung Mangun Negoro kemudian dipercaya Sri Sultan Hamengkubuwono V untuk memangku jabatan sebagai Bupati Bantul.
                                </p>

                                <p>
                                    Tanggal 20 Juli ini lah yang setiap tahunnya diperingati sebagai Hari Jadi Kabupaten Bantul. Selain itu tanggal 20 Juli tersebut juga memiliki nilai simbol kepahlawanan dan kekeramatan bagi masyarakat Bantul mengingat Perang Diponegoro dikobarkan tanggal 20 Juli 1825.Pada masa pendudukan Jepang, pemerintahan berdasarkan pada Usamu Seirei nomor 13 sedangakan stadsgemente ordonantie dihapus. Kabupaten Memiliki hak mengelola rumah tangga sendiri (otonom).
                                </p>

                                <p>
                                    Kemudian setelah kemerdekaan, pemerintahan ditangani oleh Komite Nasional Daerah untuk melaksanakan UU No 1 tahun 1945. Tetapi di Yogyakarta dan Surakarta undang-undang tersebut tidak diberlakukan hingga dikeluarkannya UU Pokok Pemerintah Daerah No 22 tahun 1948. dan selanjutnya mengacu UU Nomor 15 tahun 1950 yang isinya pembentukan Pemerintahan Daerah Otonom di seluruh Indonesia.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="kab-about-image-card kab-about-image-tall">
                                <img src="{{ asset('images/baghround-profil3.png') }}"
                                    onerror="this.onerror=null; this.src='{{ asset('images/profil-bantul.png') }}';"
                                    alt="Monumen Kabupaten Bantul"
                                    class="kab-about-img">
                            </div>
                        </div>

                    </div>

                </section>

                <!-- SECTION: VISI & MISI -->
                <section class="kab-section kab-visi-misi-section">

                    <div class="text-center mb-4">
                        <h2 class="kab-section-title text-center">Visi &amp; Misi</h2>
                        <div class="kab-title-line mx-auto"></div>
                    </div>

                    <div class="kab-visi-misi-grid">

                        <!-- Card 1: Visi -->
                        <div class="kab-card-visi">
                            <div class="kab-visi-icon-wrap">
                                <i class="bi bi-eye"></i>
                            </div>

                            <h3 class="kab-card-heading">Visi</h3>

                            <div class="kab-visi-quote">
                                &ldquo;Terwujudnya Kabupaten yang Maju, Sejahtera, dan Berdaya Saing Global Berlandaskan Nilai Kultural.&rdquo;
                            </div>
                        </div>

                        <!-- Card 2: Misi -->
                        <div class="kab-card-misi">
                            <div class="d-flex align-items-center gap-2 mb-3">
                                <div class="kab-misi-icon-wrap">
                                    <i class="bi bi-flag"></i>
                                </div>
                                <h3 class="kab-card-heading mb-0">Misi</h3>
                            </div>

                            <ol class="kab-misi-list">
                                <li>
                                    Meningkatkan kualitas sumber daya manusia melalui pendidikan dan kesehatan yang merata.
                                </li>
                                <li>
                                    Mendorong pertumbuhan ekonomi daerah yang inklusif berbasis potensi lokal dan ekonomi kreatif.
                                </li>
                                <li>
                                    Mewujudkan tata kelola pemerintahan yang bersih, transparan, dan akuntabel berbasis teknologi informasi.
                                </li>
                                <li>
                                    Meningkatkan kualitas infrastruktur dasar secara berkeadilan untuk mendukung konektivitas wilayah.
                                </li>
                            </ol>
                        </div>

                    </div>

                </section>

                <!-- SECTION: JURNAL & BERITA KABUPATEN -->
                <section class="kab-section kab-news-section">

                    <div class="kab-news-header">
                        <div>
                            <h2 class="kab-section-title mb-0">Jurnal &amp; Berita Kabupaten</h2>
                            <div class="kab-title-line"></div>
                        </div>

                        <button type="button" class="kab-see-all-btn" data-bs-toggle="modal" data-bs-target="#modalSemuaBeritaKab">
                            Lihat Semua <i class="bi bi-arrow-right"></i>
                        </button>
                    </div>

                    <div class="kab-news-grid">

                        <!-- Berita 1 -->
                        <div class="kab-news-card">
                            <span class="kab-news-badge">PEMBANGUNAN</span>

                            <h4 class="mb-2">
                                <a href="{{ route('berita.detail', 5) }}" class="kab-news-card-title">
                                    Peresmian Jembatan Baru Tingkatkan Konektivitas...
                                </a>
                            </h4>

                            <p class="kab-news-card-desc">
                                Proyek pembangunan jembatan yang menghubungkan dua kecamatan utama telah selesai diresmikan oleh Bupati hari...
                            </p>

                            <div class="kab-news-card-footer">
                                <span class="kab-news-card-date">12 Okt 2024</span>
                                <a href="{{ route('berita.detail', 5) }}" class="kab-news-card-link">
                                    Baca &rarr;
                                </a>
                            </div>
                        </div>

                        <!-- Berita 2 -->
                        <div class="kab-news-card">
                            <span class="kab-news-badge">BUDAYA</span>

                            <h4 class="mb-2">
                                <a href="{{ route('berita.detail', 6) }}" class="kab-news-card-title">
                                    Festival Budaya Tahunan Tarik Ribuan Wisatawan...
                                </a>
                            </h4>

                            <p class="kab-news-card-desc">
                                Pemerintah daerah kembali menggelar festival budaya yang menampilkan kesenian tradisional, kuliner lokal, dan...
                            </p>

                            <div class="kab-news-card-footer">
                                <span class="kab-news-card-date">09 Okt 2024</span>
                                <a href="{{ route('berita.detail', 6) }}" class="kab-news-card-link">
                                    Baca &rarr;
                                </a>
                            </div>
                        </div>

                        <!-- Berita 3 -->
                        <div class="kab-news-card">
                            <span class="kab-news-badge">PELAYANAN</span>

                            <h4 class="mb-2">
                                <a href="{{ route('berita.detail', 7) }}" class="kab-news-card-title">
                                    Luncurkan Aplikasi 'Lapor Warga' untuk Pelayanan...
                                </a>
                            </h4>

                            <p class="kab-news-card-desc">
                                Sebagai langkah digitalisasi, pemkab merilis aplikasi terpadu yang memungkinkan warga melaporkan masalah...
                            </p>

                            <div class="kab-news-card-footer">
                                <span class="kab-news-card-date">07 Okt 2024</span>
                                <a href="{{ route('berita.detail', 7) }}" class="kab-news-card-link">
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
                            <span>Jl. Robert Wolter Monginsidi No. 1, Bantul, Daerah Istimewa Yogyakarta 55711</span>
                        </li>

                        <li class="footer-contact-item">
                            <i class="bi bi-telephone-fill"></i>
                            <a href="tel:0274367509">(0274) 367509</a>
                        </li>

                        <li class="footer-contact-item">
                            <i class="bi bi-envelope-fill"></i>
                            <a href="mailto:diskominfo@bantulkab.go.id">diskominfo@bantulkab.go.id</a>
                        </li>
                    </ul>

                </div>

            </div>

            <!-- COPYRIGHT BAR BAWAH -->
            <div class="footer-bottom-bar">
                <div>
                    &copy; {{ date('Y') }} Pemerintah Kabupaten Bantul &mdash; Satuan Polisi Pamong Praja. All rights reserved.
                </div>
                <div class="d-flex gap-3">
                    <a href="{{ route('profil') }}" class="text-muted text-decoration-none">Beranda Profil</a>
                    <a href="{{ route('dashboard') }}" class="text-muted text-decoration-none">Dashboard</a>
                    <a href="{{ route('peta') }}" class="text-muted text-decoration-none">Peta Wilayah</a>
                    <a href="{{ route('data') }}" class="text-muted text-decoration-none">Data Terbuka</a>
                </div>
            </div>

        </footer>

    </div>

</div>

<!-- =========================================================
     MODAL POPUP: DETAIL BERITA PROFIL KABUPATEN
========================================================= -->
<div class="modal fade" id="modalDetailBeritaKab" tabindex="-1" aria-labelledby="modalKabNewsTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">
            <div class="modal-header border-0 pb-0 pt-3 px-4">
                <div class="d-flex align-items-center gap-2 mb-0">
                    <span id="modalKabNewsBadge" class="kab-news-badge">BERITA</span>
                    <span id="modalKabNewsDate" class="text-muted small">12 Okt 2024</span>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body px-4 py-3">
                <h3 id="modalKabNewsTitle" class="modal-news-title">Judul Berita</h3>

                <div id="modalKabNewsAuthor" class="modal-news-author">
                    <i class="bi bi-person-circle me-1"></i> Ditulis oleh Humas Pemerintah Kabupaten Bantul
                </div>

                <div class="modal-news-img-wrap">
                    <img id="modalKabNewsImage" src="{{ asset('images/baghround-profil2.png') }}" alt="Dokumentasi Berita">
                </div>

                <div id="modalKabNewsContent" class="modal-news-body">
                    <!-- Konten Berita Lengkap Dimuat via JS -->
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

<!-- =========================================================
     MODAL POPUP: SEMUA BERITA PROFIL KABUPATEN
========================================================= -->
<div class="modal fade" id="modalSemuaBeritaKab" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">
            <div class="modal-header border-0 py-3 px-4 bg-light">
                <h5 class="modal-title fw-bold text-dark mb-0">Semua Publikasi Jurnal &amp; Berita Kabupaten</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body px-4 py-4">
                <p class="text-muted mb-3">Arsip publikasi informasi pembangunan, seni budaya, dan inovasi layanan daerah.</p>

                <div class="list-group list-group-flush gap-2">
                    <a href="{{ route('berita.detail', 5) }}" class="list-group-item list-group-item-action rounded-3 border p-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <span class="kab-news-badge">PEMBANGUNAN</span>
                            <small class="text-muted">12 Okt 2024</small>
                        </div>
                        <h6 class="fw-bold mb-1 text-dark">Peresmian Jembatan Baru Tingkatkan Konektivitas Antar-Kecamatan</h6>
                        <small class="text-secondary">Proyek pembangunan jembatan yang menghubungkan dua kecamatan utama telah selesai diresmikan...</small>
                    </a>

                    <a href="{{ route('berita.detail', 6) }}" class="list-group-item list-group-item-action rounded-3 border p-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <span class="kab-news-badge">BUDAYA</span>
                            <small class="text-muted">09 Okt 2024</small>
                        </div>
                        <h6 class="fw-bold mb-1 text-dark">Festival Budaya Tahunan Tarik Ribuan Wisatawan Domestik dan Mancanegara</h6>
                        <small class="text-secondary">Pemerintah daerah kembali menggelar festival budaya yang menampilkan kesenian tradisional, kuliner lokal...</small>
                    </a>

                    <a href="{{ route('berita.detail', 7) }}" class="list-group-item list-group-item-action rounded-3 border p-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <span class="kab-news-badge">PELAYANAN</span>
                            <small class="text-muted">07 Okt 2024</small>
                        </div>
                        <h6 class="fw-bold mb-1 text-dark">Luncurkan Aplikasi 'Lapor Warga' untuk Pelayanan Publik Cepat dan Tanggap</h6>
                        <small class="text-secondary">Sebagai langkah digitalisasi, pemkab merilis aplikasi terpadu yang memungkinkan warga melaporkan masalah...</small>
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