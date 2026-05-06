<?php
$uri = uri_string();
?>
  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= site_url('/dashboard') ?>">
          <div class="sidebar-brand-icon rotate-n-15">
              <i class="fas fa-parking"></i>
          </div>
          <div class="sidebar-brand-text mx-3">SiParkir</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?= ($uri === 'dashboard') ? 'active' : '' ?>">
          <a class="nav-link" href="<?= site_url('/dashboard') ?>">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Dashboard</span>
          </a>
      </li>

      <!-- Nav Item - Riwayat -->
      <li class="nav-item <?= ($uri === 'riwayat') ? 'active' : '' ?>">
          <a class="nav-link" href="<?= site_url('/riwayat') ?>">
              <i class="fas fa-fw fa-history"></i>
              <span>Riwayat Parkir</span>
          </a>
      </li>


      <li class="nav-item">
          <a class="nav-link" href="<?= site_url('/pembayaran') ?>">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Pembayaran</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Profil -->
      <li class="nav-item <?= ($uri === 'profil') ? 'active' : '' ?>">
          <a class="nav-link" href="<?= site_url('/profil') ?>">
              <i class="fas fa-fw fa-user-circle"></i>
              <span>Profil Saya</span>
          </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler -->
      <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

  </ul>
  <!-- End of Sidebar -->