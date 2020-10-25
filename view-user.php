

<?php 
 require '../dbcontroller.php';
 include('a-header.php') 
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>view user</title>
	<style type="text/css">
		.table{
	margin: 10px auto;
	border-collapse: collapse;
	width: 90%;
	background-color: #F5F5DC;
}
.table tr th{
	background-color: #FFE4C4;
	color: #000000;
	padding: 10px;
}
.table tr td{
	padding: 5px;
}
.table tr:hover{
	background-color: #ccc;
}
.center{
	width: 80%;
	margin: 20px auto;
}
	.search{
	width: 40%;
	padding: 5px;
	float: right;
	text-align: right;
}
	</style>
</head>
<body>
	<div class="search">
	<form action="searchuser.php" method="post">
		<input placeholder="Search by names, id number, contact,gender and email" type="text" name="search-input" style="padding:10px; border-radius:7px; border: 1px solid white; background: #eee;">
		<button type="submit" name="search" class="blue darken-2" style="cursor:pointer;margin-left:10px;border-radius:7px; border: none;padding:10px;">Search</button>
	</form>
</div>


<div class="center">
		<h2 style="margin-left: 25%;">Administrators Information</h2>
		<?php 
			$selectQuery = mysqli_query($con, "select * from admin order by id desc"); 
			$numberofRows = mysqli_num_rows($selectQuery);

			echo "
					<table class='table' border=1>
					<thead>
						<tr>
							<th>Name</th>
							<th>Id Number</th>
							<th>user</th>
							<th>Gender</th>
							<th>Email</th>
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
						<td><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></td>
						<td><?php echo $row['idno']; ?></td>
						<td><?php echo $row['user']; ?></td>
						<td><?php echo $row['gander']; ?></td>
						<td><?php echo $row['email']; ?></td>
						
						<td ><label><input type="checkbox" class="indeterminate-checkbox" name='check' value="<?php echo $row['id']; ?>" required /><span></span></label></td>
						<td>
							<a href='admin-edit.php?productID=<?php echo $row['id']; ?>' type="submit" name="edit" value="Edit" style="text-decoration:none;padding:3px;border-radius:4px;border:none;background-color:steelblue;color:white">Edit</a>
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


<?php 

	if (isset($_POST['delete'])) {
		$check = $_POST['check'];

		$checkQuery = mysqli_query($con, "select * from admin where id='$check' ");
		$noRow = mysqli_num_rows($checkQuery);

		if ($noRow>0) {
			$delete = mysqli_query($con, "delete from admin where id='$check'");
			if ($delete) {
				echo "<script>alert('Administrator deleted successfully'); window.open('view-admin.php','_self') </script>";
			}else{
				echo "<script>alert('The row failed to delete'); window.open('index.php','_self') </script>";
			}
		}
	}

?>
</body>
</html>