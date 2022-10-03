<?php
include('dbconn.php');
session_start();
?>
<!DOCTYPE HTML>
<html lang="en" dir="ltr">
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
		<meta charset="utf-8">
		<title>UiTM Raub eCollege Registration(UReCR)</title>
		<link rel="stylesheet" href="style.css">
	<style>
		body{
			margin: 0;
			padding: 0;
			font-family: bahnschrift;
			background-image: url('backgroundRaub.png');
			height: 100vh;
			overflow: hidden;
		}
		.center{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			width: 400px;
			background: white;
			border-radius: 10px;
		}
	
		.center form{
			padding: 0 40px;
			box-sizing: border-box;
		}	
		form .txt_field{
			text-align: center;
			position: relative;
			border-bottom: 2px solid #adadad;
			margin: 30px 0;
		}

		.center{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			width: 400px;
			background: white;
		
		}
		.center h1{
			font-size: 22px;
			text-align: center;
			padding: 0 0 20px 0;
			border-bottom: 1px solid silver;
		}
		.imgcontainer {
			text-align: center;
			margin: 24px 0 12px 0;
			position: relative;
		}

		img.avatar {
			width: 45%;
		}
		.form-check_inline{

			position: absolute;
			text-align: center;
			
			padding-left: 130px;
		}

		.txt_field input{
			width: 100%;
			padding: 0 5px;
			height: 40px;
			font-size: 16px;
			border: none;
			background: none;
			outline: none;
		}
		
		
		.txt_field label{
			position: absolute;
			top: 10%;
			left: 5px;
			color: #adadad;
			transform: translateY(-50%);
			font-size: 16px;
			pointer-events : none;
			transition: .5s;
		}
		.txt_field span::before{
			content: '';
			position: absolute;
			top: 40px;
			left: 0;
			width: 0;
			height: 2px;
			background: #2691d9;
			transition: 0.5s;
		}
		.txt_field input:focus ~ label,
		.txt_field input:valid ~ label{
			position: center;
			top: -5px;
			color: #2691d9;
			font-weight : bold;
		}
		.txt_field input:focus ~ span::before,
		.txt_field input:valid ~ span::before{
			width: 100%;
			font-weight :bold;
		}
		
		.pass{
			margin: -5px 0 20px 5px;
			color: black;
			cursor: pointer;
		}
		.pass:hover{
			color : black;
			text-decoration: underline;
		} 
		input[type="submit"]{
			width: 100%;
			height: 40px;
			border: 1px solid;
			background: #2691d9;
			border-radius: 25px;
			border: #2691d9;
			border-inline-color: #2691d9 ;
			/* color: #fdf4f4; */
			font-size: 16px;
			font-weight: 600;
			cursor: pointer;
			outline: none;
		}
		input[type="submit"]:hover{
			border-color: #2691d9;
			transition: .5s;
			/* cursor: pointer;
			text-decoration: #000; */
		}

		.signup_link{
			margin: 30px 0;
			text-align: center;
			font-size: 16px;
		    color: #fdf4f4; 
		}
		.signup_link a{
			color: #2691d9; 
			text-decoration: none;
		}
		.signup_link a:hover{
			/* color: #000; */
			text-decoration: underline;
		}

		.signup_link .form-check_inline{
			position: center;
			text-align: center;
			text-decoration: underline;
			margin-left: -30px;

		}
		.signup_link .form-check_inline :hover{
			color: #020202; 
			text-decoration: #050505;
		}
		
	</style>
	</head>
	<body>

		<div class="center">
			<h1> EHousemate Registration System</h1>
			<div class="imgcontainer">
				
				
				<img src="logo.png" alt="Avatar" class="avatar">
			  </div>
	
			<form method="post" action="login0Student.php">
				<label><b>Student ID</b></label>
				<div class="txt_field">
					<input type="text" name="studentid" id="studentid" required>
					<span></span>
					
				</div>
				
				<label for="psw"><b>Password</b></label>
				<div class="txt_field">
					<input type="password" name="password" id="password" required>
					<span></span>

				</div>
					<input type="submit" value="Login" name="Login" id="Login">
					<a href="StudentLogin.php" value="Login As Student"></a>
				<div class="signup_link">
					
					<div class="form-check_inline">
						<a href="staffLogin.php" class="nav-link">Login As Staff ?</a>   
						<label class="form-check-label"></label>
						</div><br>
					</div>
				</div>
				
				</form>
 			 	


		</div>
	</body>
</html>