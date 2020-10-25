<?php 
session_start();
include('student-session.php'); 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Home </title>
	<style type="text/css">
	
		ul.ul{
			list-style-type: none;
			margin: 0;
			padding: 0;
			width: 15%;
			background-color: #BA55D3;
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
			background-color: #7B68EE;
			color: white;
		}
		li a.activ{
			background-color: steelblue;
			color: white;
		}
	</style>
</head>
<body></body>

<?php include('s-header.php'); ?>

	<ul class="ul" >
		<li><a class="btn" href="clearence.php">Clearance Form</a></li>
	</ul>
	<img src="image/homebg.jpg" width="1200" height="450" >

</body>
</html>