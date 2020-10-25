<?php session_start(); include('admin-session.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>admin edit</title>
	<style type="text/css">
		.form{
				width: 90%;
				margin: 50px auto;
				color: black;
				padding: 20px;
				text-align: left;
				text-align: center;
				background-color: #00BFFF;
				border-radius: 3%;
				border: 3px solid black;

			}
			form input{
				width: 30%;
				padding: 5px;
				margin: 10px auto;
				margin-left: 2%;

			}
			.btn{
				width: 30%;
				background: mediumseagreen;
				color: white;
				border-radius: 7px;
				border: none;
				margin-left: 13%;
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

$selectQuery = mysqli_query($con, "select * from admin where id='$pID' ");
$fetchQuery = mysqli_fetch_array($selectQuery);

$fname = $fetchQuery['fname'];
$lname = $fetchQuery['lname'];
$idno = $fetchQuery['idno'];
$gander = $fetchQuery['gander'];
$email = $fetchQuery['email'];

?>

<form method="post" action="" class="form" ><br>
	<label for="fname" >First Name</label> 
	<input type="text" name="fname" value="<?php echo $fname?>">
	<label for="fname" >Last Name</label> 
	<input type="text" name="lname" value="<?php echo $lname ?>"><br>
	<label for="fname" >Id Number</label> 
	<input type="text" name="idno" value="<?php echo $idno?>">
	<label for="fname" >Gender</label> 
	<input type="text" style="margin-left: 5%" name="gander" value="<?php echo $gander?>"><br>
	<label for="fname"  >Email</label> 
	<input type="text" style="margin-left: 5%" name="email" value="<?php echo $email ?>">

	<input type="submit" name="edit" class="btn" value="Update">
</form>


<?php 

	if (isset($_POST['edit'])) {
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$idno = $_POST['idno'];
		$gander = $_POST['gander'];
		$email = $_POST['email'];

		$checkQuery = mysqli_query($con, "select * from admin where id='$pID' ");
		$noRow = mysqli_num_rows($checkQuery);

		if ($noRow>0){
			$updateQuery = mysqli_query($con, "update admin set fname='$fname', lname='$lname', idno='$idno', gander='$gander', email='$email' where id='$pID'");
			if ($updateQuery) {
				echo "<script>alert('Administrator updated successfully'); window.open('view-user.php','_self') </script>";
			}else{
				echo "<script>alert('failed to update'); window.open('','_self') </script>";
			}

		}
	}

 ?>
 </body>
</html>