<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<style type="text/css">
		h2{
			text-align: center;
			color: #2E8B57;
			font-size: 20px;
			font-family: fantasy;
			font-weight: bold;
		}
		h3{
			text-align: center;
			color: #708090;
			font-size: 15px;
			font-family: verdana;
			font-weight: italic;

		}
		p{
			text-align: center;
			font-size: 14px;
			font-weight: bold;	
		}
		p a {
			text-decoration: none;
			font-size: 18px;
		}
		p a:hover:not(activ){
			background-color: #7B68EE;
			color: white;
			font-size: 23px;
		}
		h4{
			color: #A52A2A;
			text-align: center;

		}
	</style>
</head>
<body>
	<?php include('i-header.php'); ?>
		 <h2>  <i>WELCOME TO PIONEER INTERNATIONAL UNIVERSITY ONLINE STUDENTS CLEARENCE INFORMATION SYSTEM</i> </h2>
		 
<p> <a href="admin/admin-login.php"> Admnistrator Login</a></p>
<p> <a href="library/librarylogin.php"> Librarian Login</a></p>
<p> <a href="hod/hodlogin.php"> Head of department login</a></p>
<p> <a href="finance/financelogin.php"> Finance Login</a></p>
<p> <a href="registrar/registrar-login.php"> Registrar Login</a></p>
<p> <a href="exams/examlogin.php"> Examination Login</a></p>
<p> <a href="student/student-login.php"> Student Login</a></p>

</body>
</html>