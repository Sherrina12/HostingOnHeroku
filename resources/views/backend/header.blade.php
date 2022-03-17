<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E-PORTFOLIO</title>

  <style>
      thead{
        background: rgb(2,0,36);
        background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 0%, rgba(170,6,92,1) 50%, rgba(0,212,255,1) 95%);
      }
      th{
          color: white;
      }
      td:hover {background-color: rgb(203, 241, 63);}

  </style>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="backend/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="backend/dist/css/adminlte.min.css">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

    <div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="assets/img/sher.jpg" alt="AdminLTELogo" height="60" width="60">
  </div>



  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light">E-PORTFOLIO</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/img/sher.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">SHERRINA</a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="adminabout" class="nav-link">
                  <p>About Me</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="adminedu" class="nav-link">
                  <p>Education</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="adminqual" class="nav-link">
                  <p>Qualification</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="adminact" class="nav-link">
                  <p>Actvities</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="adminint" class="nav-link">
                  <p>Interest</p>
                </a>
              </li>
        </ul>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="{{url('logout')}}" class="nav-link active" >
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  LOGOUT
                </p>
              </a>
              </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
