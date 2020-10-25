<?php 

require '../dbcontroller.php';

if (isset($_POST['register-user'])) {
	$fname = mysqli_real_escape_string($con, $_POST['fname']);
	$lname = mysqli_real_escape_string($con, $_POST['lname']);
	$idnumber = mysqli_real_escape_string($con, $_POST['idnumber']);
	$contact = mysqli_real_escape_string($con, $_POST['contact']);
	$gender = mysqli_real_escape_string($con, $_POST['gender']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

	if (strlen($password)>=8) {
		if ($password===$cpassword) {
			if (preg_match("/^[a-zA-Z]*$/", $fname) && preg_match("/^[a-zA-Z]*$/", $lname)) {
				if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$check_email = mysqli_query($con, "select * from hosteller where email='$email'");
					$Check_email_rows = mysqli_num_rows($check_email);
					if ($Check_email_rows==0) {
						$check_contact = mysqli_query($con, "select * from hosteller where contact='$contact'");
						$Check_contact_rows = mysqli_num_rows($check_contact);
						if ($Check_contact_rows==0) {
							$insert_reg = mysqli_query($con, "insert into hosteller(fname, lname, idnumber, gender, contact, email, password, cpassword) values('$fname','$lname','$idnumber','$gender','$contact','$email','$password','$cpassword')");
							if ($insert_reg) {echo "<script>alert('$fname $lname Registration successful'); window.open('admin-sign.php','_self')</script>";
							}else {echo "<script>alert('$fname $lname Registration failed'); window.open('admin-sign.php','_self')</script>";}
						}else {echo  "<script>alert('The contact already exists'); window.open('admin-sign.php','_self')</script>";}
					}else {echo "<script>alert('The email already exists'); window.open('admin-sign.php','_self')</script>";}
				}else {echo "<script>alert('Email format is not correct'); window.open('admin-sign.php','_self')</script>";}
			}else {echo "<script>alert('Firstname and lastname fields must contain only letters'); window.open('admin-sign.php','_self')</script>";}
		}else {echo "<script>alert('Password does not match confirm password'); window.open('admin-sign.php','_self')</script>";}
	}else {echo "<script>alert('Password should contain atleast 8 characters'); window.open('admin-sign.php','_self')</script>";}
	

}




?>

