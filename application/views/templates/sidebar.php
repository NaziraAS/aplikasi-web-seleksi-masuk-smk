<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
      <!-- <i class="fas fa-laugh-wink"></i> -->
    </div>
    <div class="sidebar-brand-text mx-3">SMKN 1 BANGGAI LAUT</div>
  </a>
  <?php
  if ($this->session->userdata('level') == 'admin') {
  ?>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="<?= base_url('admin') ?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
  <?php } ?>
  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Menu
  </div>
  <?php
  if ($this->session->userdata('level') == 'admin') {
  ?>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-folder"></i>
        <span>Menu Data</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Data Calon Siswa:</h6>
          <!-- <a class="collapse-item" href="<?= base_url('Admin/siswa') ?>"> </a> -->
          <a class="collapse-item" href="<?= base_url('admin') ?>">Daftar Siswa</a>
          <a class="collapse-item" href="<?= base_url('Admin/standar_penilaian') ?>">standar Penilaian</a>

        </div>
      </div>
    </li>
  <?php } ?>
  <?php if ($this->session->userdata('level') == 'siswa') : ?>

    <!-- Profile -->
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('Calon_siswa') ?>">
        <i class="fas fa-fw fa-user"></i>
        <span>Profile</span></a>
    </li>
    <!-- siswa -->
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('Calon_siswa/hasilNilai') ?>">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Cek Hasil</span></a>
    </li>

    <!-- kartu pelajar -->
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('calon_siswa/kartupelajar') ?>">
        <i class="fas fa-fw fa-table"></i>
        <span>Kartu Pelajar</span></a>
    </li>
  <?php else : ?>
    <!-- Nav Laporan -->
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('Admin/laporan') ?>">
        <i class="fas fa-fw fa-book"></i>
        <span>Laporan</span></a>
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