<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="<?= BASEURL; ?>/dashboard">
          <img src="<?= BASEURL; ?>/assets_manage/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" href="#navbar-dashboards" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-dashboards">
                <i class="ni ni-shop text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
              <div class="collapse show" id="navbar-dashboards">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="<?= BASEURL; ?>/dashboard" class="nav-link">Dashboard</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= BASEURL; ?>/home/landing" class="nav-link">Beranda Pelanggan</a>
                  </li>
                </ul>
              </div>
            </li>      
            <li class="nav-item">
              <a class="nav-link" href="<?= BASEURL; ?>/kendaraan">
                <i class="ni ni-ui-04 text-info"></i>
                <span class="nav-link-text">Daftar Kendaraan</span>
              </a>
            </li>
            <?php if($data['id_grup'] == '1') { ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= BASEURL; ?>/kendaraan/data_type">
                <i class="ni ni-single-copy-04 text-pink"></i>
                <span class="nav-link-text">Tipe Kendaraan</span>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="<?= BASEURL; ?>/dashboard/data_pelanggan">
                <i class="ni ni-archive-2 text-green"></i>
                <span class="nav-link-text">Data Pelanggan</span>
              </a>
            </li> -->
            <?php } if($data['id_grup'] == '1') { ?>
              <!-- <li class="nav-item">
              <a class="nav-link" href="">
                <i class="ni ni-single-copy-04 text-pink"></i>
                <span class="nav-link-text">Data Pegawai</span>
              </a>
            </li> -->
            <?php } ?> 
            <?php if($data['id_grup'] == '2') { ?>
              <!-- <li class="nav-item">
              <a class="nav-link" href="">
                <i class="ni ni-single-copy-04 text-pink"></i>
                <span class="nav-link-text">Pembayaran</span>
              </a>
            </li> -->
            <?php } ?>
            <!-- <li class="nav-item">
              <a class="nav-link" href="<?= BASEURL; ?>/payment">
                <i class="ni ni-align-left-2 text-default"></i>
                <span class="nav-link-text">Laporan</span>
              </a>
            </li> -->
            <?php if($data['id_grup'] == '2') { ?>
            <!-- <li class="nav-item">
              <a class="nav-link" href="<?= BASEURL; ?>/dashboard/laporan">
                <i class="ni ni-chart-pie-35 text-info"></i>
                <span class="nav-link-text">Transaksi</span>
              </a>
            </li> -->
            <?php } ?>
            <?php if($data['id_grup'] == '1') { ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= BASEURL; ?>/dashboard/tambah_user">
                <i class="ni ni-ungroup text-orange"></i>
                <span class="nav-link-text">Tambah Pengguna</span>
              </a>
            </li>
            <?php } ?>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">Setelan</h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <!-- <li class="nav-item">
              <a class="nav-link" href="#" target="_blank">
                <i class="ni ni-spaceship"></i>
                <span class="nav-link-text">Profile Saya</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" target="_blank">
                <i class="ni ni-palette"></i>
                <span class="nav-link-text">Edit Profile</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" target="_blank">
                <i class="ni ni-ui-04"></i>
                <span class="nav-link-text">Reset Password</span>
              </a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="<?= BASEURL; ?>/users/logout">
                <i class="ni ni-chart-pie-35"></i>
                <span class="nav-link-text">Logout</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
   <!-- Main content -->
   <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
         
          <ul class="navbar-nav align-items-center ml-md-auto">
            <!--
            <li class="nav-item d-xl-none">
              <-- Sidenav toggler ->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-ungroup"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default dropdown-menu-right">
                <div class="row shortcuts px-4">
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                      <i class="ni ni-calendar-grid-58"></i>
                    </span>
                    <small>Riwayat</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                      <i class="ni ni-email-83"></i>
                    </span>
                    <small>Pesanan</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                      <i class="ni ni-credit-card"></i>
                    </span>
                    <small>Pembayaran</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                      <i class="ni ni-books"></i>
                    </span>
                    <small>Laporan</small>
                  </a>
                  <?php //if($data['id_grup'] == '1') { ?>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                      <i class="ni ni-pin-3"></i>
                    </span>
                    <small>Tipe Kendaraan</small>
                  </a>
                  <?php //} ?>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                      <i class="ni ni-basket"></i>
                    </span>
                    <small>Daftar Kendaraan</small>
                  </a>
                </div>
              </div>
            </li>
          </ul> --->
          <ul class="navbar-nav align-items-center ml-auto ml-md-0">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="<?= BASEURL; ?>/assets_manage/img/theme/team-4.jpg">
                  </span>
                  <div class="media-body ml-2 d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">Rizwijaya</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Selamat Datang!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>Profile Saya</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Setelan</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Reset Password</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Layanan</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="<?= BASEURL ?>/users/logout" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0"><?php echo $data['title']; ?></h6>
            <?php if($data['title'] != 'Dashboard') { 
              echo '<nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">'. $data['menu'] .'</a></li>
                <li class="breadcrumb-item active" aria-current="page">'. $data['submenu'].'</li>
              </ol>
            </nav>';
            } ?>
            </div>

          </div>
        
        