
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UReHR Homepage</title>

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
      <img src="dist/img/logo.png" alt="UITM Logo" class="brand-image">
      <span class="brand-text font-weight-light">UITM Campus Raub</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) 
      <div class="user-panel mt-4 pb-4 mb-4 d-flex">
        <div class="image">
          <img src="dist/img/logo.png" alt="UITM LOGO">
        </div>
      </div>-->

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
          <!--Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
           <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Homepage
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="StudentIndex.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Alerts and Callouts</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Application
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="housemateApplication.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Housemate Application</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="mainApplicationStatus.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Application Status</p>
                </a>
              </li>
            </ul>
          </li> 
          <li class="nav-item">
            <a href="StudentLogin.php" class ="nav-link">
            <i class="nav-icon fas fa-angle-left"> </i>
            <p>Log Out</p>
        
      </a>
  </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>UiTM Raub eHousemate Registration (UReHR)</h1><br>
            </div>
  
          <!-- /.card -->
          <!-- START ALERTS AND CALLOUTS -->
          <h5 class="mt-4 mb-2">Alerts and Callouts</h5>
  
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
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                    For the information of students who apply for residential college for phase 3, the online
                    application for a housemate (E-housemate) has been opened.
                  </div>
                  <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-info"></i> Alert!</h5>
                    Info alert for the representative of the household members
                  </div>
                  <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Alert!</h5>
                    Info alert on steps to apply the housemate application.
                  </div>
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
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- AdminLTE App -->
<script src="dist/js/studentlte.js"></script>
</body>
</html>
