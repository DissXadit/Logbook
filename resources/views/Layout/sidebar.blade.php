<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('dashboard') }}">

        <div class="sidebar-brand-text mx-1 ">LOGBOOK SAMPEL</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a class="nav-link" href="dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <!-- Nav Item - Charts -->
    @if (Auth::user()->level == 'admin')
        <hr class="sidebar-divider">
<div class="sidebar-heading">
                USER
            </div>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('user') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>User</span></a>
    </li>
    @endif

    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Logbook
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('produk') }}">
                <i class="fa-solid fa-kit-medical"></i>
            <span>Produk</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('sampel')}}">
            <i class="fa-solid fa-pills"></i>
            <span>Sampel Masuk</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Dashboard Logbook
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span>Logout</span></a>
    </li>
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-flex d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
