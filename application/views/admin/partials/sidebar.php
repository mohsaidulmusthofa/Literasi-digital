<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">N-Cocoindo</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url("admin/DashboardController") ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Management Users
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url("admin/UserController") ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Data Tim</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Management Web Content
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url("admin/PerusahaanController") ?>">
        <i class="fas fa-fw fa-solid fa-building"></i>
            <span>Perusahaan</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url("admin/JabatanController") ?>">
        <i class="fas fa-fw fa-briefcase"></i>
            <span>Jabatan</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">
        <i class="fas fa-fw fa-chart-line"></i>
            <span>Keunggulan</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-headset"></i>
            <span>Layanan</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">
        <i class="fas fa-fw fa-list-ul"></i>
            <span>Produk</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="far fa-fw fa-comments"></i>
            <span>Pesan</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>