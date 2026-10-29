@extends('layouts.app')

@section('title', 'Profil - Monitoring Data Pelanggaran Kabupaten Bantul')

@section('content')

@include('partials.sidebar')

<div id="sidebarOverlay" class="sidebar-overlay"></div>

<div class="main-content">

    @include('partials.navbar')

    <div class="profile-page">

        <!-- =========================================================
             1. HERO SECTION (TAMPILAN AWAL SEBELUM KLIK)
        ========================================================= -->
        <section class="profile-hero" style="background-image: url('{{ asset('images/profil-bantul.png') }}');">

            <div class="profile-hero-overlay"></div>

            <div class="profile-hero-content">

                <h1>
                    <span>Selamat Datang di Web Dashboard</span>
                    <br>
                    <span class="d-inline-block">Monitoring Pelanggaran Kabupaten Bantul</span>
                </h1>

                <p>
                    Menyajikan data pelanggaran Peraturan Daerah Kabupaten Bantul melalui visualisasi yang informatif untuk memudahkan pemantauan dan pemahaman kondisi pelanggaran di setiap wilayah.
                </p>

                <a href="#profil-section" id="btnHeroSelengkapnya" class="profile-detail-button">
                    Selengkapnya &gt;&gt;
                </a>

            </div>

        </section>

        <!-- =========================================================
             2. AREA KONTEN (MUNCUL & GESER KE BAWAH SETELAH KLIK SELENGKAPNYA)
        ========================================================= -->
        <div id="profileExpandedArea" class="profile-expanded-area">

            <!-- SECTION PROFIL & BERITA -->
            <section id="profil-section" class="profile-content-section">

                <div class="profile-container">

                    <!-- 2 KARTU PROFIL UTAMA (KABUPATEN & SATPOL PP) -->
                    <div class="profile-feature-grid">

                        <!-- Kartu 1: Profil Kabupaten -->
                        <div class="profile-feature-card">
                            <div>
                                <div class="profile-card-icon icon-blue">
                                    <i class="bi bi-buildings"></i>
                                </div>

                                <h3>Profil Kabupaten</h3>

                                <p>
                                    Mengenal lebih dekat sejarah, visi, misi, dan potensi wilayah
                                    Kabupaten kami. Temukan data demografi dan pencapaian daerah.
                                </p>
                            </div>

                            <div>
                                <a href="{{ route('profil.kabupaten') }}" class="profile-card-action">
                                    Selengkapnya <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Kartu 2: Profil Satpol PP -->
                        <div class="profile-feature-card">
                            <div>
                                <div class="profile-card-icon icon-amber">
                                    <i class="bi bi-shield-check"></i>
                                </div>

                                <h3>Profil Satpol PP</h3>

                                <p>
                                    Informasi mengenai struktur organisasi, tugas pokok, dan fungsi
                                    Satuan Polisi Pamong Praja dalam menegakkan Peraturan Daerah.
                                </p>
                            </div>

                            <div>
                                <a href="{{ route('profil.satpol') }}" class="profile-card-action">
                                    Selengkapnya <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                    </div>

                    <!-- SECTION BERITA & JURNAL TERBARU -->
                    <div class="news-journal-section">

                        <!-- Header Berita -->
                        <div class="news-section-header">
                            <div class="news-header-title">
                                <h2>Berita &amp; Jurnal Terbaru</h2>
                                <p>Update informasi terkini seputar kegiatan dan kebijakan daerah.</p>
                            </div>

                            <button type="button" class="news-header-btn" data-bs-toggle="modal" data-bs-target="#modalSemuaBerita">
                                <span>Lihat Berita &amp; Jurnal Lainnya</span> <i class="bi bi-arrow-right-circle ms-1"></i>
                            </button>
                        </div>

                        <!-- 4 Kartu Berita -->
                        <div class="news-cards-grid">

                            <!-- Berita 1 -->
                            <div class="news-card">
                                <a href="{{ route('berita.detail', 1) }}" class="news-card-thumb">
                                    <img src="{{ asset('images/baghround-profil2.png') }}" alt="Rapat Koordinasi Pembangunan Infrastruktur">
                                </a>

                                <div class="news-card-body">
                                    <div class="news-meta">
                                        <span class="news-badge badge-gov">PEMERINTAHAN</span>
                                        <span class="news-date">12 Okt 2024</span>
                                    </div>

                                    <h4 class="mb-2">
                                        <a href="{{ route('berita.detail', 1) }}" class="news-title">
                                            Rapat Koordinasi Pembangunan Infrastruktur
                                        </a>
                                    </h4>

                                    <p class="news-excerpt">
                                        Pemerintah Kabupaten menggelar rapat koordinasi untuk membahas rencana percepatan pembangunan infrastruktur...
                                    </p>

                                    <a href="{{ route('berita.detail', 1) }}" class="news-read-more">
                                        Baca Selengkapnya <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Berita 2 -->
                            <div class="news-card">
                                <a href="{{ route('berita.detail', 2) }}" class="news-card-thumb">
                                    <img src="{{ asset('images/baghround-profil3.png') }}" alt="Festival Budaya dan UMKM Tingkatkan Ekonomi Warga">
                                </a>

                                <div class="news-card-body">
                                    <div class="news-meta">
                                        <span class="news-badge badge-community">MASYARAKAT</span>
                                        <span class="news-date">10 Okt 2024</span>
                                    </div>

                                    <h4 class="mb-2">
                                        <a href="{{ route('berita.detail', 2) }}" class="news-title">
                                            Festival Budaya dan UMKM Tingkatkan Ekonomi Warga
                                        </a>
                                    </h4>

                                    <p class="news-excerpt">
                                        Ribuan warga antusias menghadiri festival tahunan yang memamerkan produk unggulan UMKM lokal dan pertunjukan seni...
                                    </p>

                                    <a href="{{ route('berita.detail', 2) }}" class="news-read-more">
                                        Baca Selengkapnya <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Berita 3 -->
                            <div class="news-card">
                                <a href="{{ route('berita.detail', 3) }}" class="news-card-thumb">
                                    <img src="{{ asset('images/baghround-profil4.png') }}" alt="Peluncuran Aplikasi Pelayanan Publik Terpadu">
                                </a>

                                <div class="news-card-body">
                                    <div class="news-meta">
                                        <span class="news-badge badge-service">LAYANAN</span>
                                        <span class="news-date">08 Okt 2024</span>
                                    </div>

                                    <h4 class="mb-2">
                                        <a href="{{ route('berita.detail', 3) }}" class="news-title">
                                            Peluncuran Aplikasi Pelayanan Publik Terpadu
                                        </a>
                                    </h4>

                                    <p class="news-excerpt">
                                        Aplikasi baru diluncurkan untuk mempermudah masyarakat dalam mengurus perizinan dan dokumen...
                                    </p>

                                    <a href="{{ route('berita.detail', 3) }}" class="news-read-more">
                                        Baca Selengkapnya <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Berita 4 -->
                            <div class="news-card">
                                <a href="{{ route('berita.detail', 4) }}" class="news-card-thumb">
                                    <img src="{{ asset('images/baghround-profil.jpg') }}" alt="Operasi Simpatik Penegakan Perda Trantibum">
                                </a>

                                <div class="news-card-body">
                                    <div class="news-meta">
                                        <span class="news-badge badge-order">KETERTIBAN</span>
                                        <span class="news-date">05 Okt 2024</span>
                                    </div>

                                    <h4 class="mb-2">
                                        <a href="{{ route('berita.detail', 4) }}" class="news-title">
                                            Operasi Simpatik Penegakan Perda Trantibum
                                        </a>
                                    </h4>

                                    <p class="news-excerpt">
                                        Satpol PP Bantul mengintensifkan patroli simpatik guna memastikan kenyamanan ruang publik dan kepatuhan pelaku usaha...
                                    </p>

                                    <a href="{{ route('berita.detail', 4) }}" class="news-read-more">
                                        Baca Selengkapnya <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>

                        </div>


                    </div>

                </div>

            </section>

            <!-- =========================================================
                 3. FOOTER SECTION (BAGIAN BAWAH)
            ========================================================= -->
            <footer class="profile-footer">

                <div class="profile-footer-container">

                    <!-- SISI KIRI: 2 LOGO + BRAND DESCRIPTION -->
                    <div class="footer-brand-section">

                        <!-- =========================================================
                             BAGIAN 2 LOGO DI SEBELAH KIRI
                             (User dapat mengupload/mengganti file gambar logo di bawah ini)
                        ========================================================= -->
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

</div>

<!-- =========================================================
     MODAL POPUP 1: BACA BERITA & JURNAL LENGKAP
========================================================= -->
<div class="modal fade" id="modalDetailBerita" tabindex="-1" aria-labelledby="modalNewsTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">
            <div class="modal-header border-0 pb-0 pt-3 px-4">
                <div class="modal-news-meta mb-0">
                    <span id="modalNewsBadge" class="news-badge badge-gov">BERITA</span>
                    <span id="modalNewsDate" class="news-date">12 Okt 2024</span>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body px-4 py-3">
                <h3 id="modalNewsTitle" class="modal-news-title">Judul Berita</h3>

                <div id="modalNewsAuthor" class="modal-news-author">
                    <i class="bi bi-person-circle me-1"></i> Ditulis oleh Humas Kabupaten Bantul
                </div>

                <div class="modal-news-img-wrap">
                    <img id="modalNewsImage" src="{{ asset('images/baghround-profil2.png') }}" alt="Dokumentasi Berita">
                </div>

                <div id="modalNewsContent" class="modal-news-body">
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
     MODAL POPUP 2: PROFIL KABUPATEN BANTUL
========================================================= -->
<div class="modal fade" id="modalProfilKabupaten" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">
            <div class="modal-header bg-light border-0 py-3 px-4">
                <div class="d-flex align-items-center gap-2">
                    <div class="profile-card-icon icon-blue mb-0" style="width: 36px; height: 36px; font-size: 18px;">
                        <i class="bi bi-buildings"></i>
                    </div>
                    <h5 class="modal-title fw-bold text-dark mb-0">Profil Kabupaten Bantul</h5>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body px-4 py-4">
                <div class="mb-4">
                    <h5 class="fw-bold text-primary mb-2"><i class="bi bi-compass me-2"></i>Visi Kabupaten Bantul</h5>
                    <div class="p-3 bg-light rounded-3 border-start border-primary border-4">
                        <p class="mb-0 fw-semibold text-dark">
                            "Terwujudnya Masyarakat Kabupaten Bantul yang Harmonis, Sejahtera, dan Berkeadilan Berlandaskan Nilai-nilai Keagamaan dan Kebudayaan Menuju Bantul Projotamansari."
                        </p>
                    </div>
                </div>

                <div class="mb-4">
                    <h5 class="fw-bold text-primary mb-2"><i class="bi bi-check2-circle me-2"></i>Misi Kabupaten Bantul</h5>
                    <ol class="text-secondary ps-3 mb-0" style="line-height: 1.8;">
                        <li>Meningkatkan kualitas sumber daya manusia yang unggul, berkarakter, dan berdaya saing global.</li>
                        <li>Mengembangkan perekonomian berbasis potensi lokal (pertanian, industri kreatif, pariwisata, dan UMKM).</li>
                        <li>Mewujudkan tata kelola pemerintahan yang bersih, efektif, transparan, dan berbasis teknologi informasi digital.</li>
                        <li>Meningkatkan kualitas infrastruktur terpadu, penataan tata ruang yang ramah lingkungan, dan tangguh bencana.</li>
                    </ol>
                </div>

                <div>
                    <h5 class="fw-bold text-primary mb-2"><i class="bi bi-geo-alt me-2"></i>Kondisi Geografis &amp; Wilayah</h5>
                    <p class="text-secondary mb-0" style="line-height: 1.7;">
                        Kabupaten Bantul merupakan salah satu kabupaten di Daerah Istimewa Yogyakarta yang terdiri atas 17 Kapanewon dan 75 Kalurahan. Terbentang dari pegunungan di sisi timur hingga pesisir pantai selatan, Kabupaten Bantul kaya akan warisan seni budaya, kerajinan kelas dunia, dan destinasi wisata unggulan.
                    </p>
                </div>
            </div>

            <div class="modal-footer border-0 px-4 pb-3">
                <button type="button" class="btn btn-primary px-4 rounded-3" data-bs-dismiss="modal">
                    Mengerti
                </button>
            </div>
        </div>
    </div>
</div>

<!-- =========================================================
     MODAL POPUP 3: PROFIL SATPOL PP BANTUL
========================================================= -->
<div class="modal fade" id="modalProfilSatpol" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">
            <div class="modal-header bg-light border-0 py-3 px-4">
                <div class="d-flex align-items-center gap-2">
                    <div class="profile-card-icon icon-amber mb-0" style="width: 36px; height: 36px; font-size: 18px;">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h5 class="modal-title fw-bold text-dark mb-0">Profil Satpol PP Kabupaten Bantul</h5>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body px-4 py-4">
                <div class="mb-4">
                    <h5 class="fw-bold text-dark mb-2"><i class="bi bi-award me-2 text-warning"></i>Tugas Pokok</h5>
                    <p class="text-secondary" style="line-height: 1.7;">
                        Satuan Polisi Pamong Praja (Satpol PP) Kabupaten Bantul mempunyai tugas pokok membantu Bupati dalam menegakkan Peraturan Daerah (Perda) dan Peraturan Kepala Daerah (Perkada), menyelenggarakan ketertiban umum dan ketenteraman masyarakat (Trantibum), serta menyelenggarakan pelindungan masyarakat (Linmas).
                    </p>
                </div>

                <div class="mb-4">
                    <h5 class="fw-bold text-dark mb-2"><i class="bi bi-gear-wide-connected me-2 text-warning"></i>Fungsi Utama</h5>
                    <ul class="text-secondary ps-3 mb-0" style="line-height: 1.8;">
                        <li>Penyusunan program kerja dan pelaksanaan penegakan Perda dan Perkada di wilayah Bantul.</li>
                        <li>Pelaksanaan kebijakan operasional pemeliharaan ketertiban umum dan ketenteraman warga.</li>
                        <li>Pelaksanaan koordinasi ketenteraman dan ketertiban umum dengan TNI, Polri, dan instansi vertikal terkait.</li>
                        <li>Pengawasan, pembinaan, penyidikan, dan penindakan non-yustisial serta yustisial terhadap pelanggaran Perda.</li>
                        <li>Pembinaan dan pemberdayaan Satuan Pelindungan Masyarakat (Satlinmas) di tingkat Kapanewon dan Kalurahan.</li>
                    </ul>
                </div>

                <div class="p-3 bg-light rounded-3 border-start border-warning border-4">
                    <h6 class="fw-bold text-dark mb-1"><i class="bi bi-megaphone me-2"></i>Maklumat Pelayanan Trantibum</h6>
                    <p class="mb-0 text-secondary" style="font-size: 13.5px;">
                        "Memberikan pelayanan penegakan ketertiban secara profesional, berkeadilan, humanis, dan responsif demi terwujudnya Kabupaten Bantul yang tertib, nyaman, dan harmonis bagi seluruh masyarakat."
                    </p>
                </div>
            </div>

            <div class="modal-footer border-0 px-4 pb-3">
                <button type="button" class="btn btn-warning text-dark fw-bold px-4 rounded-3" data-bs-dismiss="modal">
                    Tutup
                </button>
            </div>
        </div>
    </div>
</div>

<!-- =========================================================
     MODAL POPUP 4: LIHAT SEMUA BERITA & JURNAL
========================================================= -->
<div class="modal fade" id="modalSemuaBerita" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">
            <div class="modal-header border-0 py-3 px-4 bg-light">
                <h5 class="modal-title fw-bold text-dark mb-0">Arsip Berita &amp; Jurnal Kabupaten Bantul</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body px-4 py-4">
                <p class="text-muted mb-3">Daftar publikasi kegiatan resmi Pemerintah Kabupaten Bantul dan Satpol PP.</p>

                <div class="list-group list-group-flush gap-2">
                    <a href="{{ route('berita.detail', 1) }}" class="list-group-item list-group-item-action rounded-3 border p-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <span class="news-badge badge-gov">PEMERINTAHAN</span>
                            <small class="text-muted">12 Okt 2024</small>
                        </div>
                        <h6 class="fw-bold mb-1 text-dark">Rapat Koordinasi Pembangunan Infrastruktur</h6>
                        <small class="text-secondary">Pemerintah Kabupaten menggelar rapat koordinasi untuk membahas rencana percepatan pembangunan...</small>
                    </a>

                    <a href="{{ route('berita.detail', 2) }}" class="list-group-item list-group-item-action rounded-3 border p-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <span class="news-badge badge-community">MASYARAKAT</span>
                            <small class="text-muted">10 Okt 2024</small>
                        </div>
                        <h6 class="fw-bold mb-1 text-dark">Festival Budaya dan UMKM Tingkatkan Ekonomi Warga</h6>
                        <small class="text-secondary">Ribuan warga antusias menghadiri festival tahunan yang memamerkan produk unggulan UMKM lokal...</small>
                    </a>

                    <a href="{{ route('berita.detail', 3) }}" class="list-group-item list-group-item-action rounded-3 border p-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <span class="news-badge badge-service">LAYANAN</span>
                            <small class="text-muted">08 Okt 2024</small>
                        </div>
                        <h6 class="fw-bold mb-1 text-dark">Peluncuran Aplikasi Pelayanan Publik Terpadu</h6>
                        <small class="text-secondary">Aplikasi baru diluncurkan untuk mempermudah masyarakat dalam mengurus perizinan dan dokumen...</small>
                    </a>

                    <a href="{{ route('berita.detail', 4) }}" class="list-group-item list-group-item-action rounded-3 border p-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <span class="news-badge badge-order">KETERTIBAN</span>
                            <small class="text-muted">05 Okt 2024</small>
                        </div>
                        <h6 class="fw-bold mb-1 text-dark">Operasi Simpatik Penegakan Perda Trantibum</h6>
                        <small class="text-secondary">Satpol PP Bantul mengintensifkan patroli simpatik guna memastikan kenyamanan ruang publik dan kepatuhan...</small>
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