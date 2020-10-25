<?php session_start(); include('hod-session.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.form{
				width: 70%;
				margin: 20px auto;
				border-radius: 10px;
				background: #FFE4E1;
				color: black;
				padding: 20px;
				text-align: center;
				background-color: #00BFFF;
				border-radius: 3%;
				border: 3px solid black;

			}
			form input{
				width: 50%;
				padding: 5px;
				margin: 10px auto;
				margin-left: 25%;
			}
			.btn{
				width: 20%;
				background: dodgerblue;
				color: white;
				border-radius: 7px;
				border: none;
			}
			.btn:hover{
				color: dodgerblue;
				background: white;
				border: 1px dodgerblue solid;
			}
			label{
				margin-left: 25%



			}
	</style>
</head>
<body>


<?php 

require '../dbcontroller.php';
include ('hod-header.php');

error_reporting(0);

$pID = $_GET['unitid'];

$selectQuery = mysqli_query($con, "select * from clearance where id='$pID' ");
$fetchQuery = mysqli_fetch_array($selectQuery);

$approve = $fetchQuery['deansign'];
?>

<form method="post" action="" class="form" ><br>
	
<!-- 	<label for="fname" >Approve</label> 
	<input type="text" name="dean" value="<?php echo $email ?>"><br> -->

	<label for="clearance:"class="lbl" >Clearance:</label>
	<select name="dean" class="ged"value="<?php echo $email ?>" style="color: black; width:50%; padding: 8px; border: 2px solid steelblue; border-radius: 4px;">>
	<option>CLEARED</option>
	<option>NOT CLEARED</option>
	>
</select>

	<input type="submit" name="edit" class="btn" value="Update">
</form>


<?php 

	if (isset($_POST['edit'])) {
		$approve = $_POST['dean'];

		$checkQuery = mysqli_query($con, "select * from clearance where id='$pID' ");
		$noRow = mysqli_num_rows($checkQuery);

		if ($noRow>0){
			$updateQuery = mysqli_query($con, "update clearance set hod='$approve' where id='$pID'");
			if ($updateQuery) {
				echo "<script>alert('Clearance submitted successfully'); window.open('view-hod.php','_self') </script>";
			}else{
				echo "<script>alert('failed to update'); window.open('','_self') </script>";
			}

		}
	}

 ?>
 </body>
</html>