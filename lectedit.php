<?php session_start(); include('admin-session.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>commitee edit</title>
	<style type="text/css">
		.form{
				width: 90%;
				margin: 50px auto;
				color: black;
				padding: 20px;
				text-align: left;

			}
			form input{
				width: 30%;
				padding: 5px;
				margin: 10px auto;
				margin-left: 2%;
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
			label{
				margin-left: 2%



			}
	</style>
</head>
<body>


<?php 

require '../dbcontroller.php';
include ('a-header.php');

error_reporting(0);

$pID = $_GET['productID'];

$selectQuery = mysqli_query($con, "select * from lecturer where id='$pID' ");
$fetchQuery = mysqli_fetch_array($selectQuery);

$fname = $fetchQuery['fname'];
$lname = $fetchQuery['lname'];
$idno = $fetchQuery['idno'];
$gander = $fetchQuery['gander'];
$contact = $fetchQuery['contact'];
$email = $fetchQuery['email'];

?>

<form method="post" action="" class="form" ><br>
	<label for="fname" >First Name</label> 
	<input type="text" name="fname" value="<?php echo $fname?>">
	<label for="fname" >Last Name</label> 
	<input type="text" name="lname" value="<?php echo $lname ?>"><br>
	<label for="idno" >idno</label> 
	<input type="number" style="margin-left: 6%" name="idno" value="<?php echo $idno?>">
	<label for="gander" >Gander</label> 
	<input type="text"  style="margin-left: 5%"  name="gander" value="<?php echo $gander ?>"><br>
	<label for="fname" >Contact</label> 
	<input type="number" name="contact" value="<?php echo $contact ?>">
	<label for="fname" >Email</label> 
	<input type="text"  style="margin-left: 7.5%"  name="email" value="<?php echo $email ?>"><br>

	<input type="submit"  style="margin-left: 35%"  name="edit" class="btn" value="Update">
</form>


<?php 

	if (isset($_POST['edit'])) {
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$idno = $_POST['idno'];
		$gander = $_POST['gander'];
		$contact = $_POST['contact'];
		$email = $_POST['email'];

		$checkQuery = mysqli_query($con, "select * from lecturer where id='$pID' ");
		$noRow = mysqli_num_rows($checkQuery);

		if ($noRow>0){
			$updateQuery = mysqli_query($con, "update lecturer set fname='$fname', lname='$lname', idno='$idno', gander='$gander', contact='$contact', email='$email' where id='$pID'");
			if ($updateQuery) {
				echo "<script>alert('Lecturer Acount Updated successfully'); window.open('view-lec.php','_self') </script>";
			}else{
				echo "<script>alert('failed to update'); window.open('','_self') </script>";
			}

		}
	}

 ?>
 </body>
</html>