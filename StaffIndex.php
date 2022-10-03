<?php
include('dbconn.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UiTM Raub eHousemate Registration (UReHR)</title>
  <!-- letak kat semua page tau -->
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a class="brand-link">
      <img src="dist/img/uitm_logo.png" alt="UITM Logo" class="brand-image">
      <span class="brand-text font-weight-light">UITM Kampus Raub</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Homepage
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="StaffIndex.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Alerts and Callouts</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="applicationList.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Application List
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="StudentLogin.php" class ="nav-link">
            <i class="nav-icon fas fa-angle-left"> </i>
            <p>Log Out</p>
        
      </a>
  </li>
       
        </ul>
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Welcome to Administrator's Page</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>
                <p>Total of Applications</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px"></sup></h3>
                <p>Total Students</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>
                <p>Total Staff</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>
                <p>Total Students in College</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>

        <!-- /.row -->
          <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>UiTM Raub eHousemate Registration (UReHR)</h1><br>
                </div>
      
              <div class="row">
                <div class="col-md-6">
                  <div class="card card-default">
                    <div class="card-header">
                      <h3 class="card-title">
                        <i class="fas fa-exclamation-triangle"></i>
                        Alerts
                      </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <div class="alert alert-danger alert-dismissible">
                        For the information of students who apply for residential college for phase 3, the online
                        application for a housemate (E-housemate) has been opened.
                      </div>
                      <div class="alert alert-info alert-dismissible">
                        <h5><i class="icon fas fa-info"></i> Alert!</h5>
                        Info alert for the representative of the household members
                      </div>
                      <div class="alert alert-success alert-dismissible">
                        <h5><i class="icon fas fa-check"></i> Alert!</h5>
                        Info alert on steps to apply the housemate application.
                      </div><!-- 
                      <input type="submit" name="Edit information" value="Edit"> -->
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
      
                <div class="col-md-6">
                  <div class="card card-default">
                    <div class="card-header">
                      <h3 class="card-title">
                        <i class="fas fa-bullhorn"></i>
                        Callouts 
                      </h3>
                      
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <div class="callout callout-danger">
                        <h5>E-Housemate Application Callout!</h5>
      
                        <p>Accordingly, the application only needs to be done by each house representative and
                           must be submitted no later than 1 June 2022 equivalent to Wednesday before 4.00 pm.</p>
                      </div>
                      <div class="callout callout-info">
                        <h5>Representative of the household callout!</h5>
      
                        <p>House representative must fill in all the information of housemates totaling of minimum
                           of 4 students and maximum of 8 students.</p>
                      </div>
                      <div class="callout callout-success">
                        <h5>Steps to apply the housemate application</h5>
      
                        <p>
                          <ul>
                            <li>For the information on students applying for a residential college, the online housemate application has been opened.</li>
                            <li>House member representatives need to apply the Housemate Application through the Housemate Application system provided.</li>
                            <li>the representative of the household members must fill in all the information of the 8 housemates (make sure there are enough 8 people)
                                to avoid random sorting during registration.</li>
                            <li>The representative of the household member must ensure that all the information entered is correct to avoid any issues.</li>
                          </ul>  
                        </p>
                      </div>
                      <!-- <input type="submit" name="Edit information" value="Edit"> -->
                      
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </section>
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
