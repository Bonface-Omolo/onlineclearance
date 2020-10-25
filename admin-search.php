<?php 

require 'dbcon.php';
include ('header.php');

if (isset($_POST['search'])) {
	$input = mysqli_real_escape_string($con, $_POST['search-input']);

	$searchQuery = mysqli_query($con, "select * from products where pname like '%$input%'  or details like '%$input%' or price like '%$input%' ");

		echo "
			<table class='table' border=1>
			<thead>
				<tr>
					<th>No.</th>
					<th>Name</th>
					<th>Details</th>
					<th>Price</th>
					<th>Checklist</th>
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
						<td><?php echo $no; ?></td>
						<td><?php echo $row['pname']; ?></td>
						<td><?php echo $row['details']; ?></td>
						<td>Kshs.<?php echo $row['price']; ?></td>
						<td><label><input class="indeterminate-checkbox" type="checkbox" name="check" value="<?php echo $row['p_id']; ?>" required><span></span></label></td>
						<td>
							<a href='edit.php?p_id=<?php echo $row['p_id']; ?>' type="submit" name="edit" value="Edit" style="text-decoration:none;padding:3px;border-radius:4px;border:none;background-color:steelblue;color:white">Edit</a>
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