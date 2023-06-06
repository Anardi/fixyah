<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Rumah Sakit Medkit</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="{{ asset('template/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">About</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">10 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 Report Baru
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('template/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Rumah Sakit Medkit</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('template/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Bagas Anardi</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item active"> 
            <a href="/" class="nav-link">
              <i class="fa fa-home"></i>
              <p>
                Dashboard  
              </p>
            </a>
          </li>

          <li class="nav-item Fasilitas">
            <a href="#" class="nav-link">
              <i class="fas fa-medkit"></i>
              <p>
                Informasi Dokter
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item"> 
                <a href="{{ route('Dokter') }}" class="nav-link">
                  <i class="fa fa-fw fa-user-md"></i>
                  <p>
                    Dokter  
                  </p>
                </a>
              </li>

              <li class="nav-item"> 
                <a href="{{ route('Obat') }}" class="nav-link">
                  <i class="fas fa-capsules"></i>
                  <p>
                    Obat
                  </p>
                </a>
              </li>

              <li class="nav-item"> 
                <a href="{{ route('Pemeriksaan') }}" class="nav-link">
                  <i class="fas fa-file-medical-alt"></i>
                  <p>
                    Pemeriksaan Dokter
                  </p>
                </a>
              </li>

              <li class="nav-item"> 
                <a href="{{ route('Jadwal') }}" class="nav-link">
                  <i class="fas fa-calendar-plus"></i>
                  <p>
                    Jadwal Periksa
                  </p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item Fasilitas">
            <a href="#" class="nav-link">
              <i class="fas fa-address-book"></i>
              <p>
                Informasi Pasien
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('Pasien') }}" class="nav-link">
                  <i class="fas fa-wheelchair"></i>
                  <p>
                    Data Pasien
                  </p>
                </a>
              </li>

              <li class="nav-item"> 
                <a href="{{ route('Pembayaran') }}" class="nav-link">
                  <i class="fa fa-fw fa-credit-card"></i>
                  <p>Pembayaran</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/poliklinik" class="nav-link">
                  <i class="fa fa-fw fa-h-square"></i>
                  <p>
                    Poliklinik
                  </p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item Fasilitas">
            <a href="#" class="nav-link">
              <i class="fas fa-hand-holding-medical"></i>
              <p>
                Fasilitas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('Kamar') }}" class="nav-link">
                  <i class="fas fa-procedures"></i>
                  <p>
                    Kamar
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('JenisKamar') }}" class="nav-link">
                  <i class="fa fa-fw fa-bed"></i>
                  <p>
                    Jenis Kamar
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/poliklinik" class="nav-link">
                  <i class="fa fa-fw fa-h-square"></i>
                  <p>
                    Poliklinik
                  </p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item"> 
            <a href="{{ route('Pegawai') }}" class="nav-link">
              <i class="fas fa-id-card-alt"></i>
              <p>
                Pegawai
              </p>
            </a>
          </li>

          <li class="nav-item"> 
            <a href="{{ route('Pengguna') }}" class="nav-link">
              <i class="fa fa-fw fa-user"></i>
              <p>
                Data Pengguna
              </p>
            </a>
          </li>

          <li class="nav-item"> 
            <a href="{{ route('TenagaMedis') }}" class="nav-link">
              <i class="fa fa-fw fa-stethoscope"></i>
              <p>
                Tenaga Medis
              </p>
            </a>
          </li>

          <li class="nav-item"> 
            <a href="https://adminlte.io/docs/3.1/" class="nav-link">
              <i class="fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

 

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('template/dist/js/adminlte.js') }}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('template/plugins/jquery-mousewheel/jquery.mousewheel.js') }} "></script>
<script src="{{ asset('template/plugins/raphael/raphael.min.js') }} "></script>
<script src="{{ asset('template/plugins/jquery-mapael/jquery.mapael.min.js') }} "></script>
<script src="{{ asset('template/plugins/jquery-mapael/maps/usa_states.min.js') }} "></script>
<!-- ChartJS -->
<script src="{{ asset('template/plugins/chart.js/Chart.min.js') }} "></script>

<!-- AdminLTE for demo purposes -->
{{-- <script src="{{ asset('template/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('template/dist/js/pages/dashboard2.js') }}"></script> --}}
</body>
</html>
