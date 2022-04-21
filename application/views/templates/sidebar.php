<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard') ?>">
        <div class="sidebar-brand-icon">
            <i class="fas fa-home"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ADMIN</div>
    </a>


    <!-- Divider -->
    <hr class="sidebar-divider my-3">
    <div class="sidebar-heading">
        ADMINISTRATOR
    </div>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('dashboard') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        MENU
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#data" aria-expanded="true" aria-controls="data">
            <i class="fas fa-fw fa-file"></i>
            <span>Data</span>
        </a>
        <div id="data" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url('data/list_jenis') ?>">Jenis Aglonema</a>
                <a class="collapse-item" href="<?= base_url('data/list_tanaman') ?>">Data Tanaman</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#gejala" aria-expanded="true" aria-controls="gejala">
            <i class="fas fa-fw fa-file"></i>
            <span>Gejala</span>
        </a>
        <div id="gejala" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">Jenis Penyakit</a>
                <a class="collapse-item" href="#">Jenis Gejala</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#obat" aria-expanded="true" aria-controls="obat">
            <i class="fas fa-fw fa-cannabis"></i>
            <span>Obat</span>
        </a>
        <div id="obat" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">Jenis Obat</a>
                <a class="collapse-item" href="#">Data Obat</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-search"></i>
            <span>Diagnosis</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-user"></i>
            <span>User Management</span></a>
    </li>
    <li class="nav-item">
        <a onclick="return confirm('Apakah anda Yakin keluar ?')" class="nav-link"
            href="<?= base_url('auth/logout') ?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Keluar</span></a>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->