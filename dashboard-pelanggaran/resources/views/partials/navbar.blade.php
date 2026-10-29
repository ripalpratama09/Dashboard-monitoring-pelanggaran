<nav class="top-navbar">

    <div class="d-flex align-items-center gap-3">

        <button
            id="toggleSidebar"
            class="menu-toggle"
            aria-label="Buka Menu">

            <i class="bi bi-list fs-4"></i>

        </button>

        <h4 class="fw-bold mb-0 nav-brand-title">
            Monitoring Data Pelanggaran Kabupaten Bantul
        </h4>

    </div>

    @if(request()->routeIs('profil*') || request()->routeIs('berita*'))
    <div id="topNavProfileMenu" class="top-nav-menu d-flex align-items-center {{ request()->routeIs('profil') ? 'profile-menu-hidden' : '' }}">

        <!-- 1. Home (Halaman Profil Utama) -->
        <a href="{{ route('profil') }}"
           class="top-nav-tab {{ request()->routeIs('profil') ? 'active' : '' }}"
           title="Kembali ke Halaman Profil Utama">
            <span>Home</span>
        </a>

        <!-- 2. Profil Kabupaten -->
        <a href="{{ route('profil.kabupaten') }}"
           class="top-nav-tab {{ request()->routeIs('profil.kabupaten') ? 'active' : '' }}"
           title="Halaman Profil Kabupaten Bantul">
            <span>Profil Kabupaten</span>
        </a>

        <!-- 3. Profil Satpol PP -->
        <a href="{{ route('profil.satpol') }}"
           class="top-nav-tab {{ request()->routeIs('profil.satpol') ? 'active' : '' }}"
           title="Halaman Profil Satpol PP Bantul">
            <span>Profil Satpol PP</span>
        </a>

    </div>
    @endif

</nav>