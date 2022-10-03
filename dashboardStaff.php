<?php
session_start();
if(isset($_SESSION['staff_id'])){
	// store session in var
	$studentid = $_SESSION['staff_id'];
?>
<html>
	<head>
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

<body>
<table border="1" width="1000" align="center">
<tr>
	<th colspan="2"><h1>Place your image banner here</h1></th>
</tr>
<tr>
	<td align="left"><h3>Links</h3></td>
	<td align="right"><h3>Hi, <?php echo $_SESSION['studentname']; ?> [<a href="logout.php">Logout</a>]</h3></td>
</tr>
<tr>
	<td>
	<a href="dashboard.php">My Profile</a><br />
	<a href="search.php">Search</a><br />
	<a href="listStudent.php">List Student</a>
	</td>
	<td>
	<?php
	// database connection 
	include("eHousemate/dbconn.php");

	// display your profile immediately after login
	$sql = "SELECT * FROM staff WHERE staff_id = '$staff_id'";
	$query = mysqli_query($dbconn, $sql) or die ("Error: " . mysqli_error($dbconn));
	$row = mysqli_num_rows($query);
	if($row != 0)
	{
		$r = mysqli_fetch_assoc($query);
		echo "<table border='1' width='500'>";
		echo "<tr>";
			echo "<th>Student Number</th>";
			echo "<td>".$r['stud_id']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<th>Name</th>";
			echo "<td>".$r['stud_name']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<th>Email</th>";
			echo "<td>".$r['stud_email']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<th>Programme</th>";
			echo "<td>".$r['stud_programmeCode']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td colspan='2'><a href='update.php?studentnumber=".$studentnumber."'>Click to update Student Detail</a></td>";
		echo "</tr>";
		echo "</table>";
	}
	?>
	</td>
</tr>
<tr>
	<th colspan="2">Copyright (2014). Your name.</th>
</tr>
</table>
</body>
</html>
<?php 
}
else{
	header("Location: StaffLoginW.php");
}
?>