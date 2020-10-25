<?php 
session_start();
include('admin-session.php'); 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Home</title>
	<style type="text/css">
	
		ul.ul{
			list-style-type: none;
			margin: 0;
			padding: 0;
			width: 20%;
			background-color: #BA55D3;
			position: fixed;
			height: 100%;
			overflow: auto;
		}
		li a.btn{
			display: block;
			color: #000;
			padding: 10px 0 10px 10px;
			text-decoration: none;
			/*background-color: white;*/
		}
		li a.btn:hover:not(activ){
			background-color: #7B68EE;
			color: white;
		}
		li a.activ{
			background-color: steelblue;
			color: white;
		}
		.bg{
			background-image:  url("../image/piu.jpeg");
			background-size: contain;
			width: 1100px;
			height: 380px;
			border: 1px solid block;
			/*color: pink;*/
			resize: both;
			overflow: scroll;
			background-repeat: repeat;
		}
	</style>
</head>
<body>
<?php include('a-header.php'); ?>
<div class="bg"  >
	
	<ul class="ul" >
		<li><a class="btn" href="add-user.php" >New Fucalty</a></li>
		<li><a class="btn" href="std-view.php" >View Student acount</a></li>
		<li><a class="btn" href="view-user.php" >Users</a></li>
		
	</ul>
</div>

</body>
</html>