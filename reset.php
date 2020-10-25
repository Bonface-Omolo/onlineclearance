<?php 
require '../dbcontroller.php'; 
if (isset($_POST['submit'])) {
	$newpass=$_POST['newpass'];
	$email = $_GET['email'];
	$changepass = mysqli_query($con, "UPDATE student SET password ='".$newpass."' WHERE email='".$email."'");
	if ($changepass) {
		echo "<script>alert('Reset successful'); window.open('student-login.php','_self')</script>";
	}else{
		echo'Error';
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Reset pwdmediumseagreen</title>
	<style type="text/css">
		.form{
				width: 70%;
				margin: 50px auto;
				color: black;
				padding: 20px;
				text-align: center;
				background-color: #00BFFF;
				border-radius: 3%;
				border: 3px solid black;
			}
			form input{
				width: 30%;
				padding: 5px;
				margin: 10px auto;
			}
			.btn{
				width: 20%;
				background: mediumseagreen;
				color: white;
				border-radius: 7px;
				border: none;
			}
			.btn:hover{
				color: mediumseagreen;
				background: white;
				border: 1px mediumseagreen solid;
			}
				body{
			margin: 0px;
			padding: 0px;
		}

		header{
				width: 100%;
				position: fixed;
				position: relative;
				height: 100px;
				background: #663399;
			}
			.logo{
				position: absolute;
				left: 10%;
				top: 10px;
			}
			nav{
				position: absolute;
				top: 20px;
				right: 10%;
			}
			nav ul li{
				list-style: none;
				float: left;
			}
			nav ul li a{
				text-decoration: none;
				padding: 20px;
				color: white;
			}
			nav ul li a:hover{
				color: #ccc;
				font-size: 20px;
			}
			h1{
				font-size: 18px;
				padding: 20px;
			}
	</style>
</head>
<body>
		<header>
	<div class="logo">
		<h1>PIONEER INTERNATIONAL UNIVERSITY ONLINE STUDENTS CLEARENCE INFORMATION SYSTEM</h1>
	</div>
	<nav>
		<ul>
			<li><a href="student-login.php">LOGIN</a></li>
		</ul>
	</nav>
</header>
	<form method="post" class="form">
		<h2>Reset Password Form</h2>
		<input type="text" name="newpass" placeholder="Enter new password" required>
		<input type="text" name="newpass" placeholder="Confirm new password" required></br>
		<input type="submit" name="submit" class="btn">
		
	</form>

</body>
</html>