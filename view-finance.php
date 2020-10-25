<?php session_start(); include('finance-session.php'); ?>



<?php 
 require '../dbcontroller.php';
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>view</title>
	<style type="text/css">
		.table{
	margin: 10px auto;
	border-collapse: collapse;
	width: 80%;

}
.table tr th{
	background-color: #F5E4C4;
	color: #000000;
	padding: 10px;
	font-size: 10px;
}
.table tr td{
	padding: 5px;
	font-size: 12px;
	background-color: #F0FFFF;
}
.table tr:hover{
	background-color: #ccc;
}
.center{
	width:100%;
	margin: 20px auto;
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
		left: 1%;
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
			<li><a href="registrer-home.php">HOME</a></li>
			<li><a href="about.php">ABOUT</a></li>
			
			<li><a href="financelogin.php">LOGOUT</a></li>
		</ul>
	</nav>
</header>
<div class="bgsize" >

<div class="center">
		<h2 style="margin-left: 40%;">Students Information</h2>
		<?php 
			$selectQuery = mysqli_query($con, "select * from clearance order by id desc"); 
			$numberofRows = mysqli_num_rows($selectQuery);

			echo "
					<table class='table' border=1>
					<thead>
						<tr>
						<th>ADMISSION NO</th>
						<th>NAME</th>
						<th>EDUCATION LEVEL</th>
						<th>CLEARANCE DATE</th>
						<th>FINANCE</th>
						<th>checklist</th>
						<th>Action</th>
						</tr>
					</thead>
					<tbody>
				";

			if ($numberofRows>0) {
				$seq_no = 1;
				while ($row = mysqli_fetch_assoc($selectQuery)) {
			?>
				
				<tr>
					<form action="" method="post">
						<td><?php echo $row['addimission']; ?> </td>
						<td><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></td>
						<td><?php echo $row['level']; ?></td>
						<td><?php echo $row['date']; ?></td>
						<td><?php echo $row['finance']; ?></td>
					
						
						<td ><label><input type="checkbox" class="indeterminate-checkbox" name='check' value="<?php echo $row['id']; ?>" required /><span></span></label></td>
						<td>
							<a href='finance-edit.php?unitid=<?php echo $row['id']; ?>' type="submit" name="edit" value="Edit" style="text-decoration:none;padding:3px;border-radius:4px;border:none;background-color:steelblue;color:white">Clearance</a>
							<button type="submit" name="delete" value="Delete" style="padding:3px;border-radius:4px;border:none;background-color:red;color:white">Delete</button>
						</td>
					</form>
				</tr>
				
						
			<?php
				$seq_no ++;
				} 
			}
		echo '</tbody></table>';
		?>
	</div>
</div>


<?php 

	if (isset($_POST['delete'])) {
		$check = $_POST['check'];

		$checkQuery = mysqli_query($con, "select * from current where id='$check' ");
		$noRow = mysqli_num_rows($checkQuery);

		if ($noRow>0) {
			$delete = mysqli_query($con, "delete from current where id='$check'");
			if ($delete) {
				echo "<script>alert('The row Deleted successfully'); window.open('view-current.php','_self') </script>";
			}else{
				echo "<script>alert('The row failed to delete'); window.open('view-current.php','_self') </script>";
			}
		}
	}

?>
</body>
</html>