<?php 

require '../dbcontroller.php';

if (isset($_POST['login-user'])) {
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);

	$check_details = mysqli_query($con, "select * from student where email = '$email' and password = '$password' ");
	$check_rows = mysqli_num_rows($check_details);
	if ($check_rows==1) {
		session_start();
		$_SESSION['email'] = $email;

		echo "<script>alert('login successful'); window.open('student-home.php','_self')</script>";
		}else{
			echo "<script>alert('login failed'); window.open('student-login.php','_self')</script>";
		}
}else{
	header('Location: ');
}


?>