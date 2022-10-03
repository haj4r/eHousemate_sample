<?php
include("dbconn.php");
if(isset($_POST['Save'])) {
  $stud_id = $_POST['stud_id'];
  $semester_ID = $_POST['semester_ID'];
  $room_Num = $_POST['room_Num'];

  $sql = "INSERT INTO housemate_application (stud_id,semester_ID,room_num) VALUES ('".$stud_id."','".$semester_ID."','".$room_Num."')";
  $result = mysqli_query($dbconn,$sql);

 
}

?>
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
                <a href="pages/forms/housemateApplication.php" class="nav-link">
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
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>HOUSEMATE APPLICATION</h1>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <!-- left column -->
              <div class="col-md-6">
                <!-- general form elements -->
                <form action="housemateApplication.php" method="post">
                <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Application Form</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputStudentID1">Student ID</label>
                          <input type="text" class="form-control" id="exampleInputStudentID1" placeholder="Enter Your Student ID" name="stud_id">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputStudentID1">Semester</label>
                          <select name="semester_ID" id="semester_ID" class="form-control" style="width:5em">
                            <?php
                            $sql = "SELECT * FROM semester";
                            $result = mysqli_query($dbconn,$sql);
                            while($d = mysqli_fetch_assoc($result)) {
                              echo "<option value=".$d['semester_ID'].">".$d['semester_num']."</option>";
                            }
                            ?>
                          </select>
                        </div>
                          <!-- select -->
                          <div class="form-group">
                            <label>Room</label>
                            <select class="form-control" name="room_Num" id="room_Num" style="width:5em">
                              <option value="A">A</option>
                              <option value="B">B</option>
                              <option value="C">C</option>
                              <option value="I">I</option>
                            </select>
                          </div>
                          <!-- select -->
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="Save" class="btn btn-primary">Submit </button>
                    </div>
                </div>
              </form>
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
                          
            <!-- /.card-body -->
                          
                            

