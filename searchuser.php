<!DOCTYPE html>
<html>
<head>
	<title>Admin Search</title>
	<style type="text/css">
		.table{
			margin: 10px auto;
			border-collapse: collapse;
			width: 80%;
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
	
	</style>
</head>
<body>

<?php 

require '../dbcontroller.php';
include ('a-header.php');

if (isset($_POST['search'])) {
	$input = mysqli_real_escape_string($con, $_POST['search-input']);

	$searchQuery = mysqli_query($con, "select * from admin where fname like '%$input%'  or lname like '%$input%' or idno like '%$input%' or user like '%$input%' or gander like '%$input%' or email like '%$input%'");

		echo "
			<table class='table' border=1>
			<thead>
				<tr>
					<th>Name</th>
						<th>Id Number</th>
						<th>User</th>
						<th>Gender</th>
						<th>Email</th>
						<th>checklist</th>
						<th>Action</th>
				</tr>
			</thead>
			<tbody>
		";

	if (mysqli_num_rows($searchQuery)>0){
		$no =1;
		while ($row = mysqli_fetch_array($searchQuery)) {
			?>
				<tr>
					<form action="action.php" method="post">
						<td><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></td>
						<td><?php echo $row['idno']; ?></td>
						<td><?php echo $row['user']; ?></td>
						<td><?php echo $row['gander']; ?></td>
						<td><?php echo $row['email']; ?></td>
						
						<td><label><input class="indeterminate-checkbox" type="checkbox" name="check" value="<?php echo $row['p_id']; ?>" required><span></span></label></td>
						<td>
							<a href='admin-edit.php?productid=<?php echo $row['id']; ?>' type="submit" name="edit" value="Edit" style="text-decoration:none;padding:3px;border-radius:4px;border:none;background-color:steelblue;color:white">Edit</a>
							<button type="submit" name="delete" value="Delete" style="padding:3px;border-radius:4px;border:none;background-color:red;color:white">Delete</button>
						</td>
					</form>
				</tr>
			<?php
				$no ++;
				}
			}echo '</tbody></table>';
	}


?>
</body>
</html>