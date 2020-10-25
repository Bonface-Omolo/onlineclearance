<!DOCTYPE html>
<html>
<head>
	<title>Report edit</title>
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

	$selectQuery = mysqli_query($con, "select * from cases where id='$pID' ");
	$fetchQuery = mysqli_fetch_array($selectQuery);

	$addimission = $fetchQuery['addimission'];
	$fname = $fetchQuery['fname'];
	$lname = $fetchQuery['lname'];
	$year = $fetchQuery['year'];
	$casecode = $fetchQuery['casecode'];
	$cases = $fetchQuery['cases'];
	$date = $fetchQuery['date'];
	$semester = $fetchQuery['semester'];

	?>

<form method="post" action="" class="form" ><br>
	<label for="addimission" >Addimission</label>
	<input type="text" name="addimission" value="<?php echo $addimission?>">
	<label for="fname" >fname</label> 
	<input type="text" name="fname" value="<?php echo $fname ?>"><br>
	<label for="lname" >Lname</label> 
	<input type="text" style="margin-left: 6%" name="lname" value="<?php echo $lname?>">
	<label for="year" >Year</label> 
	<input type="text" style="margin-left: 3.5%" name="year" value="<?php echo $year?>"><br>
	<label for="cases" >Case</label>
	<input type="text" style="margin-left: 7%" name="cases" value="<?php echo $cases?>">
	<label for="date" >Date</label> 
	<input type="date" style="margin-left: 4%" name="date" value="<?php echo $date ?>"><br>
	<label for="semester" >Semester</label> 
	<input type="text" style="margin-left: 4%" name="semester" value="<?php echo $semester?>">
	<input type="submit" name="edit" class="btn" value="Update">
</form>

<?php 

	if (isset($_POST['edit'])) {
		$addimission = $_POST['addimission'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$year = $_POST['year'];
		$casecode = $_POST['casecode'];
		$cases = $_POST['cases'];
		$date = $_POST['date'];
		$semester = $_POST['semester'];

		$checkQuery = mysqli_query($con, "select * from cases where id='$pID' ");
		$noRow = mysqli_num_rows($checkQuery);

		if ($noRow>0){
			$updateQuery = mysqli_query($con, "update cases set addimission='$addimission', fname='$fname', lname='$lname' , year='$year' , casecode='$casecode' , cases='$cases' , date='$date' , semester='$semester'where id='$pID'");
			if ($updateQuery) {
				echo "<script>alert('Appealed case updated successfully'); window.open('view-report.php','_self') </script>";
			}else{
				echo "<script>alert('failed to update'); window.open('','_self') </script>";
			}

		}
	}

 ?>
 </body>
</html>