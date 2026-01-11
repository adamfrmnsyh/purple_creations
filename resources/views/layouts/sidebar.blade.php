<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar"
    style="background: linear-gradient(180deg, #FDCFFA 0%, #DD7BDF 100%);">


    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="../img/logo.svg" alt="">
        </div>
        <div class="sidebar-brand-text mx-3">Purple Creations</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span class="text-[#fb03ff] hover:text-[#de8bf3]">Dashboard</span></a>
    </li>

   
    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="/admin/katalog">
            <i class="fas fa-fw fa-table "></i>
            <span class="text-[#fb03ff] font-weight-bold hover:text-[#de8bf3]">Katalog</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/admin/pesanan">
            <i class="fas fa-fw fa-table"></i>
            <span class="text-[#fb03ff] font-weight-bold hover:text-[#de8bf3]">Riwayat Pesanan</span></a>
    </li>

    <!-- Nav Item - Logout -->
    <li class="nav-item">
        <a class="nav-link text-danger" href="#"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span class="font-weight-bold hover:text-[#ffb3f5]">Logout</span>
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>