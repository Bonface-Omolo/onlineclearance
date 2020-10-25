
<?php 
require '../dbcontroller.php';
 ?>
			
<html>
<head>
<title>registrer login Form</title>
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
				background: purple;
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
				width: 20%;
				background: black;
				color: white;
				border-radius: 7px;
				border: none;
			}
			.btn:hover{
				color: dodgerblue;
				background: white;
				border: 1px dodgerblue solid;
			}
		/*	.bgsize{
			background-image: url("../image/piu1.jpg");
			background-size: contain;
			width: 1070px;
			height: 400px;
			border: 1px solid block;
			/*color: pink;*/
			resize: both;
			overflow: scroll;
		}*/
		button{
			background-color: green;
			border-radius: 6px;
			width: 120px;
			height: 30px;
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
			<li><a href="registrerlogin.php">LOGIN</a></li>
			<!-- <li><a href="admin-sign.php">SIGN-IN</a></li> -->
			
		</ul>
	</nav>
</header>
<div class="bgsize" >

<form class="form" name="frmRegistration" method="post" action="reg-login.php">
	<h2> Registrar login </h2>
<input placeholder="email" type="email" class="demoInputBox" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" required>
<input placeholder="Password" type="password" class="demoInputBox" name="password" value="<?php if(isset($_POST['password'])) echo $_POST['password']; ?>" required><br>

<input class='btn' type="submit" name="login-user" value="Login" class="btnRegister" required>
 <button> <a href="check.php" style="text-decoration: none;" >Forget Password</a></button>
</form>
</div>
</bod/>
</html>
