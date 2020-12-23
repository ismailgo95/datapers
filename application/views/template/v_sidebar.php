<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('Admin/Dashboard') ?>">
    <div class="sidebar-brand-icon">
      <i class="fas fa-hospital-user"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Personalia</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  <?php $hal = $this->uri->segment(2) ?>
  <!-- Nav Item - Dashboard -->
  <li class="nav-item <?= ($hal == 'Dashboard') ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('Admin/Dashboard') ?>">
      <i class="fas fa-desktop"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Data Personalia
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item <?= ($hal == 'Militer' || $hal == 'Pns' || $hal == 'Tks') ? 'active' : '' ?>">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-database"></i>
      <span>Data Personalia</span>
    </a>

    <div id="collapseTwo" class="collapse <?= ($hal == 'Militer' || $hal == 'Pns' || $hal == 'Tks') ? 'show' : '' ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item <?= ($hal == 'Militer') ? 'active' : '' ?>" href="<?= base_url('Admin/Militer') ?>">MILITER</a>
        <a class="collapse-item <?= ($hal == 'Pns') ? 'active' : '' ?>" href="<?= base_url('Admin/Pns') ?>">PNS</a>
        <a class="collapse-item <?= ($hal == 'Tks') ? 'active' : '' ?>" href="<?= base_url('Admin/Tks') ?>">TKS</a>
      </div>
    </div>
  </li>

  <!-- Nav Item - Utilities Collapse Menu -->
  <?php if ($this->session->userdata('role_id') == 1) : ?>
    <li class="nav-item <?= ($hal == 'Users' || $hal == 'Pangkat') ? 'active' : '' ?>">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-database"></i>
        <span>Master Data</span>
      </a>
      <div id="collapseUtilities" class="collapse <?= ($hal == 'Users' || $hal == 'Pangkat') ? 'show' : '' ?>" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Input Master Data:</h6>
          <a class="collapse-item" href="utilities-color.html">Pangkat</a>
          <a class="collapse-item <?= ($hal == 'Users') ? 'active' : '' ?>" href="<?= base_url('Admin/Users') ?>">Users</a>
        </div>
      </div>
    </li>
  <?php endif; ?>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

      <!-- Sidebar Toggle (Topbar) -->
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
      </button>

      <img src="<?= base_url('') ?>/assets/img/hesti.png" alt="logo" width="60px">
      <div class="d-none d-sm-block  mt-3 ml-2">
        <h4 class="text-dark font-weight-bold">RS TK II 02.05.01 DR AK GANI PALEMBANG </h4>
      </div>

      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">
        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Selamat Datang, <strong><?= strtoupper($users['name']) ?></strong></span>
            <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
          </a>
          <!-- Dropdown - User Information -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">
              <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
              Profile
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" onclick="return confirm('Apakah anda ingin Keluar ?')" href="<?= base_url('Auth/logout') ?>">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              Logout
            </a>
          </div>
        </li>

      </ul>

    </nav>
    <!-- End of Topbar -->