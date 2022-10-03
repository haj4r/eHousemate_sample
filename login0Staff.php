<?php
/* include db connection file */
include("dbconn.php");

if(isset($_POST['Login'])){
	/* capture values from HTML form */
	$id = $_POST['studentid'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM staff WHERE staff_id = '".$id."'";
	$result = mysqli_query($dbconn,$sql);
	$rows = mysqli_fetch_assoc($result);
	if($rows > 0) {
		session_start();
		$_SESSION['id'] = $rows['staff_id'];
		$_SESSION['password'] = $rows['staff_icNum'];
		$_SESSION['role'] = 'staff';
		$ooo = $_SESSION['role'];
		header("Location: StaffIndex.php?$ooo");
	}

	/* /* if($username == "staff" && $password == "staff"){
		$_SESSION['studentid'] = "Administrator";	
		header("Location: menuAdmin.php");
	}
	else{ */
		/* execute SQL command */
		/* $sql = "SELECT * FROM staff WHERE staff_id = '$id'
				AND staff_icNum = '$password'";
		echo $sql;
		$query = mysqli_query($dbconn, $sql) or die("Error: " . mysqli_error($dbconn));
		$row = mysqli_num_rows($query);
		if($row == 0){
			echo "Invalid Username/Password. Click here to <a href='staffLogin.php'>login</a>.";
		}
		else{
			
		} */
} 


mysqli_close($dbconn);
?>