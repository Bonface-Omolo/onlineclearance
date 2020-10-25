<?php 

require '../dbcontroller.php';

if (isset($_POST['clear'])) {
	$addimission = mysqli_real_escape_string($con, $_POST['addimission']);
	$fname = mysqli_real_escape_string($con, $_POST['fname']);
	$lname = mysqli_real_escape_string($con, $_POST['lname']);
	$level = mysqli_real_escape_string($con, $_POST['level']);
	$date = mysqli_real_escape_string($con, $_POST['date']);


	 $Check_clearance = mysqli_query($con, "select * from clearance where addimission ='$addimission'");
	    $check_row = mysqli_num_rows($Check_clearance);
		if ($check_row==0) {
			$insert_reg = mysqli_query($con, "insert into clearance(addimission, fname, lname, level, date) values('$addimission','$fname','$lname','$level','$date')");
			if ($insert_reg) {echo "<script>alert('clearance submitted successfully'); window.open('student-home.php','_self')</script>";
			}else {echo "<script>alert('Insertion failed'); window.open('clearence.php','_self')</script>";}
		}else {echo "<script>alert('The case code code already exists'); window.open('clearence.php','_self')</script>";}
	}
			



?>

