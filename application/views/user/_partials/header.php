<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Blank</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url(); ?>src/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url(); ?>src/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>src/css/custom.css" rel="stylesheet">
</head>

<body id="page-top" class="sidebar-toggled">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SIPB <sup>V2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?php if($this->uri->segment(1) == "/") { echo "active"; } ?>">
        <a class="nav-link " href="/">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Beranda</span></a>
      </li> 

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item <?php if($this->uri->segment(1) == "about") { echo "active"; } ?>">
        <a class="nav-link " href="about">
          <i class="fas fa-fw fa-info-circle"></i>
          <span>Tentang Kami</span>
        </a>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item <?php if($this->uri->segment(1) == "penerbangan") { echo "active"; } ?>">
        <a class="nav-link" href="penerbangan">
          <i class="fas fa-fw fa-plane"></i>
          <span>Penerbangan</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item <?php if($this->uri->segment(1) == "fasilitas") { echo "active"; } ?>">
        <a class="nav-link " href="fasilitas">
          <i class="fas fa-fw fa-align-justify"></i>
          <span>Fasilitas</span></a>
      </li>

			<li class="nav-item <?php if($this->uri->segment(1) == "staff") { echo "active"; } ?>">
        <a class="nav-link " href="staff">
          <i class="fas fa-fw fa-users"></i>
          <span>Staff</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
