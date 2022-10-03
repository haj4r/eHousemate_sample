<?php
include("dbconn.php");
session_start();  
$id = $_GET['id'];
if(isset($_POST['Save'])) {
  $id = $_GET['id'];
  $building_id = $_POST['building_id'];
  $floor_num = $_POST['floor_num'];
  $house_num = $_POST['house_num'];

  $sqlupdate = "UPDATE housemate_application SET status_id = 'A', building_id = '".$building_id."' , floor_num = '".$floor_num."', house_num = '".$house_num."'
  WHERE housemate_id ='".$id."'";
  $result = mysqli_query($dbconn,$sqlupdate);
  if($result) {
    header("Location: applicationList.php");
  } else {
    header("Location: viewpage.php");
  }
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Boxed Layout</title>

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
<style>
  .imgcontainer {
			text-align: left;
			margin: 30px 0 20px 0;
			position: relative;
		}

		img.avatar {
      text-align: left;
			width: 25%;
		}
p.info {
  border: 1px solid rgb(0, 2, 94);
  outline-style: solid;
  outline-color: rgb(182, 183, 248);
  outline-width: 4px;
/*   display: grid; */
  grid-template-columns: auto auto auto auto; 
  gap: 10px; 
  margin: auto; 
  width: 70%;
  padding: 30px 30px;
  
}
  </style>
<body class="hold-transition sidebar-mini layout-boxed" >

<!-- <div class="imgcontainer" >
				
				
    <img src="logo.png" alt="Avatar" class="avatar">
    </div> -->
    

<!-- Site wrapper -->
<div class="wrapper">
<div class="imgcontainer">
				
				
        <img src="logo.png" alt="Avatar" class="avatar">
        </div>
    <!-- Content Header (Page header) -->
      <div class="container-fluid" style="width:50em">
        <div class="row mb-2">
          <div class="col-sm-6">
          <!-- <img src="logo.png" alt="Avatar" class="avatar"> -->
<!--             <h1><b>HOUSEMATE APPLICATION <b></h1> -->
          </div>
        </div>
      </div><!-- /.container-fluid -->

    <!-- Main content -->
    <section class="content" style="width:50em" text-align ="center">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <!-- Default box -->
            <form action="viewpage.php?id=<?php echo $id;?>" method="post">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><b>HOUSEMATE APPLICATION</b></h3>
              </div>
              
              
              <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputBuilding">BUILDING :</label>
                          <select name="building_id" id="building_id" class="form-control" style="width:10em">
                          <?php
                            $sql = "SELECT * FROM building";
                            $result = mysqli_query($dbconn,$sql);
                            while($d = mysqli_fetch_assoc($result)) {
                              echo "<option value=".$d['building_id'].">".$d['building_id']."</option>";
                            }
                            ?>
                            </select>
                          <!-- <output class="form-control" id="stud_id" name="stud_id"><?php echo $stud_id;?></output> -->
                        </div>
                        <div class="form-group">
                          <label for="exampleInputFloor">FLOOR :</label>
                          <input type="text" class="form-control" id="floor_num" name="floor_num" style="width:10em">
                          <!-- <output class="form-control" id="stud_name" name="stud_name"><?php echo $stud_name;?></output> -->
                        </div>
                        <div class="form-group">
                          <label for="exampleInputHouseNo">HOUSE NO : </label>
                          <input type="text" class="form-control" id="house_num"  name="house_num" style="width:10em">
                        </div>
                      </div>
              <!-- /.card-body -->
                <div class="card-footer">
                  <!-- <button type="submit" name="Save" class="btn btn-primary">Submit </button> -->
                  <input type="submit" value="Save" name="Save" class="btn btn-primary" id="Save">
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
    
   

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
