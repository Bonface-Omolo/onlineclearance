
<?php 
require '../dbcontroller.php';
 ?>
			
<html>
<head>
<title>Student login</title>
	<style>
		body{
			margin: 0px;
			padding: 0px;
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
				left: 10%;
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
			}
			.btn{
				width: 10%;
				background: mediumseagreen;
				color: white;
				border-radius: 7px;
				border: none;
			}
			.btn:hover{
				color: mediumseagreen;
				background: white;
				border: 1px mediumseagreen solid;
			}
			button{
				width: 20%;
				height: 25px;
				background: black;
				color: white;
				border-radius: 7px;
				border: none;

			}
			  a{
				text-decoration: none;
				color: black;
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
			<li><a href="../index.php">HOME</a></li>
		</ul>
	</nav>
</header>
<form class="form" name="frmRegistration" method="post" action="s-login.php">
	<h2>Student login</h2>
<input placeholder="email" type="email" class="demoInputBox" name="email" required><br>
<input placeholder="Password" type="password" class="demoInputBox" name="password" required><br>

<input class='btn' type="submit" name="login-user" value="Login" class="btnRegister" required><br>
<a style="margin-left: -4%;" href="registration.php"><b>Create account</b></a> <a style="margin-left: 5%;" href="check.php"><b>Forget Password</b></a> 
</form>

</bod/>
</html>
