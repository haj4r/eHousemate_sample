
<?php
include('dbconn.php');
session_start();

$id = $_GET['id'];
$sql = "SELECT h.*, s.stud_name FROM housemate_application h
JOIN student s ON h.stud_id = s.stud_id
where h.housemate_id ='".$id."'";
$result = mysqli_query($dbconn,$sql);
$row = mysqli_fetch_assoc($result);
$stud_id = $row['stud_id'];
$stud_name = $row['stud_name'];
$semester_ID = $row['semester_ID'];
$room_num = $row['room_num'];

if(isset($_POST['Reject'])) {
  $id = $_GET['id'];
  $sqlupdate = "UPDATE housemate_application SET status_id = 'R' WHERE housemate_id = '".$id."'";
  $result = mysqli_query($dbconn,$sqlupdate);
  if($result) {
    header("Location: applicationList.php");
  } 
}

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
           <!--  <h1 class="m-0">Welcome to Administrator's Page</h1> -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <!-- left column -->
              <div class="col-md-6">
                <!-- general form elements -->
                <form action="adminViewPage.php?id=<?php echo $id;?>" method="post">
                <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Application Form</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputStudentID1">Student ID</label>
                          <output class="form-control" id="stud_id" name="stud_id"><?php echo $stud_id;?></output>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputStudentName1">Student Name</label>
                          <output class="form-control" id="stud_name" name="stud_name"><?php echo $stud_name;?></output>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputStudentID1">Semester</label>
                          <output class="form-control" id="semester_ID" name="semester_ID" style="width:10em"><?php echo $semester_ID;?></output>
                        </div>
                          <!-- select -->
                          <div class="form-group">
                            <label>Room</label>
                            <output class="form-control" id="room_num" name="room_num" style="width:5em"><?php echo $room_num;?></output>
                          </div>
                          <!-- select -->
                    </div>
                    <div class="card-footer">
                    <button type="button" name="Save" id="Save" onclick="window.location.href='viewpage.php?id=<?php echo $row['housemate_id'];?>'" class="btn btn-success ">Approved</button>
                     <!--  <button class="btn btn-success">Accept</button> -->
                     <button type="submit" name="Reject" id="Reject" onclick="window.location.href='adminViewPage.php?id=<?php echo $row['housemate_id'];?>'" class="btn btn-success">Reject</button>
                    </div>
                </div>
              </form>
            </div> 
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<footer class="main-footer">
    <br><br>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/studentlte.min.js"></script>
<!-- Page specific script -->
</body>
</html>
