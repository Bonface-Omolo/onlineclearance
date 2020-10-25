<?php
session_start();
include('finance-session.php'); 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Home page</title>
	<style type="text/css">
	
		ul.ul{
			list-style-type: none;
			margin: 0;
			padding: 0;
			width: 15%;
			background-color: #f1f1f1;
			position: fixed;
			height: 100%;
			overflow: auto;
		}
		li a.btn{
			display: block;
			color: #000;
			padding: 20px 0 20px 40px;
			text-decoration: none;
		}
		li a.btn:hover:not(activ){
			background-color: turquoise;
			color: white;
		}
		li a.activ{
			background-color: steelblue;
			color: white;
		}
		.bgsize{
			background-image: url("../image/piu1.jpg");
			background-size: contain;
			width: 1400px;
			height: 500px;
			border: 1px solid block;
			/*color: pink;*/
			resize: both;
			overflow: scroll;
		}
	</style>
</head>
<body>

<?php include('finance-header.php'); ?>

<div class="bgsize">

	<ul class="ul">
		<li><a class="btn" href="view-finance.php">View clearance</a></li>
		
	</ul>
</div>
</body>
</html>