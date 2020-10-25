<!DOCTYPE html>
<html>
<head>
	<title>Appeal edit</title>
	<style type="text/css">
		.form{
				width: 80%;
				margin: 50px auto;
				color: black;
				padding: 10px;
				text-align: left;

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

	$selectQuery = mysqli_query($con, "select * from appeal where id='$pID' ");
	$fetchQuery = mysqli_fetch_array($selectQuery);

	$addimission = $fetchQuery['addimission'];
	$casecode = $fetchQuery['casecode'];
	$message = $fetchQuery['message'];

	?>

<form method="post" action="" class="form" ><br>
	<label for="fname" >Addimission</label>
	<input type="text" name="addimission" value="<?php echo $addimission?>">
	<label for="fname" >Case code</label> 
	<input type="text" name="casecode" value="<?php echo $casecode ?>"><br>
	<label for="fname" >Reason</label> 
	<input type="text" style="margin-left: 6%" name="message" value="<?php echo $message?>">
	<input type="submit" name="edit" class="btn" value="Update">
</form>

<?php 

	if (isset($_POST['edit'])) {
		$addimission = $_POST['addimission'];
		$casecode = $_POST['casecode'];
		$message = $_POST['message'];

		$checkQuery = mysqli_query($con, "select * from appeal where id='$pID' ");
		$noRow = mysqli_num_rows($checkQuery);

		if ($noRow>0){
			$updateQuery = mysqli_query($con, "update appeal set addimission='$addimission', casecode='$casecode', message='$message' where id='$pID'");
			if ($updateQuery) {
				echo "<script>alert('Appealed case updated successfully'); window.open('view-appeal.php','_self') </script>";
			}else{
				echo "<script>alert('failed to update'); window.open('','_self') </script>";
			}

		}
	}

 ?>
 </body>
</html>