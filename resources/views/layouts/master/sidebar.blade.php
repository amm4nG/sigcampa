    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: #38527E" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
            <div class="sidebar-brand-icon rotate-n-15">
                <img src="{{ asset('assets/img/stop-stunting.png') }}" style="width: 50px; height: 50px;" class="rounded-circle img-thumbnail" alt="">
            </div>
            <div class="sidebar-brand-text mx-2"> Stop<sup class="text-warning">Stunting</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            menu
        </div>
        <li class="nav-item {{ Request::is('artikel*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('artikel.index') }}">
                <i class="fas fa-fw fa-book"></i>
                <span>Artikel</span></a>
        </li>

        <li class="nav-item {{ Request::is('faq*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('faq.index') }}">
                <i class="fas fa-fw fa-question"></i>
                <span>FAQ</span></a>
        </li>

        <li class="nav-item {{ Request::is('peta*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('peta.index') }}">
                <i class="fas fa-fw fa-map"></i>
                <span>Data Peta</span></a>
        </li>

        <li class="nav-item {{ Request::is('pengaturan*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('pengaturan.index') }}">
                <i class="fas fa-fw fa-cog"></i>
                <span>Pengaturan</span></a>
        </li>

        <hr class="sidebar-divider d-none d-md-block">
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>
    <!-- End of Sidebar -->
