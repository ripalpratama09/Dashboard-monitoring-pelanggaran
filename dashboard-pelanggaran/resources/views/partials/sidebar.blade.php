<div class="sidebar">

    <div class="sidebar-header">

        <div class="sidebar-brand">

            <img
                src="{{ asset('images/logobrand-web.png') }}"
                alt="Logo Engineer-x"
                class="sidebar-logo">

            <div class="brand-text">

                <h6 class="mb-0 fw-bold">
                    Engineer-x
                </h6>

            </div>

        </div>

        <button
            id="closeSidebar"
            class="btn btn-sm btn-outline-light border-0">

            <i class="bi bi-x-lg"></i>

        </button>

    </div>

    <hr class="border-secondary my-3">

    <ul class="nav flex-column">

        <!-- Profil -->
        <li class="nav-item">
            <a href="{{ route('profil') }}"
                class="nav-link {{ request()->routeIs('profil*') ? 'active' : '' }}">
                <i class="bi bi-person-circle"></i>
                Profil
            </a>
        </li>

        <!-- Dashboard -->
        <li class="nav-item">
            <a href="{{ route('dashboard') }}"
                class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <i class="bi bi-speedometer2"></i>
                Dashboard
            </a>
        </li>

        <!-- Statistik -->
        <li class="nav-item">
            <a href="{{ route('statistik') }}"
                class="nav-link {{ request()->routeIs('statistik') ? 'active' : '' }}">
                <i class="bi bi-bar-chart"></i>
                Statistik
            </a>
        </li>

        <!-- Peta -->
        <li class="nav-item">
            <a href="{{ route('peta') }}"
                class="nav-link {{ request()->routeIs('peta') ? 'active' : '' }}">
                <i class="bi bi-geo-alt"></i>
                Peta
            </a>
        </li>

        <!-- Data -->
        <li class="nav-item">
            <a href="{{ route('data') }}"
                class="nav-link {{ request()->routeIs('data') ? 'active' : '' }}">
                <i class="bi bi-table"></i>
                Data
            </a>
        </li>

    </ul>

</div>