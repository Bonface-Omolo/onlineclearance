<?php require '../dbcontroller.php'; ?>

<!DOCTYPE html>
	
<head>
<title>Add Admin</title>
<style type="text/css">
	form{
		 width: 80%;
		margin: 2px auto;
		border-radius: 10px;
		background: white;
		color: black;
		padding: 2px;
		text-align: center;
		background-color: #00BFFF;
		border-radius: 3%;
		border: 3px solid black;
		/*text-align: center;*/
		
	}
	.fname{
		width: 30%;
		height: 10px;
		padding: 15px 15px;
		margin: 8px 0;
		box-sizing: border-box;
		border: 2px solid steelblue;
		border-radius: 4px;
		font-size: 16px;
	}
	.lname{
		width: 30%;
		height: 10px;
		padding: 15px 15px;
		margin: 8px 0;
		box-sizing: border-box;
		border: 2px solid steelblue;
		border-radius: 4px;
		font-size: 16px;
		margin-left: 4%;
}
	.cont{
		width: 30%;
		height: 20px;
		padding: 15px 15px;
		margin: 8px 0;
		box-sizing: border-box;
		border: 2px solid steelblue;
		border-radius: 4px;
		font-size: 16px;
		margin-left: 6%;
	}
	.number{
		width: 30%;
		height: 20px;
		padding: 15px 15px;
		margin: 8px 0;
		box-sizing: border-box;
		border: 2px solid steelblue;
		border-radius: 4px;
		font-size: 16px;
		margin-left: 0%;

	}
	input[type=email]{
		width: 30%;
		height: 20px;
		padding: 15px 15px;
		margin: 8px 0;
		box-sizing: border-box;
		border: 2px solid steelblue;
		border-radius: 4px;
		font-size: 16px;
		margin-left: 6%;

	}
	input[type=password]{
		width: 30%;
		height: 10px;
		padding: 15px 15px;
		margin: 8px 0;
		box-sizing: border-box;
		border: 2px solid steelblue;
		border-radius: 4px;
		font-size: 16px;


	}
	input[type=submit]{
		size: 40px;
		background-color: #00FFFF;
		border: 2px solid black;
		padding: 5px 25px;
		text-decoration: none;
		margin: 2px 2px;
		cursor: pointer;
		border-radius: 10px;
		text-align: center;
		margin-left: 30%;
	}
	button[type=cancel]{
		size: 40px;
		background-color: #DC143C;
		border: 2px solid black;
		padding: 5px 25px;
		text-decoration: none;
		margin: 2px 2px;
		cursor: pointer;
		border-radius: 10px;
		margin-left: 10%;
	}
	 label{
	 	
	}
	h2{
		padding: 2px;
		margin: 2px;
		text-align: center;
	}
	
		header{
				width: 100%;
				position: fixed;
				position: relative;
				height: 100px;
				background: dodgerblue;
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
			/*#demo{
				margin-left: 20%;
			}*/
			.lbl{
				margin-left: 2%;
			}
			.lbl2{
				margin-left: 2%;
			}
			.ged{
				margin-left: 3%;
			}
			button a{
				text-decoration: none;
			}
			
</style>
</head>
<body>
	
	<?php include('a-header.php'); ?>
<form name="frmRegistration" method="post" action="adduser.php"> 
	<H2>Administration Form</H2>
<label for="fname" class="lbl" >First Name</label>
<input type="text" class="fname" name="fname"  required>
<label for="lname"  class="lbl2"> Last Name</label>
<input type="text" class="lname" name="lname" required><br>
<label for="idnumber"class="lbl" >ID Number</label> 
<input type="number" class="number"name="idno"  required>

<label for="user:"class="lbl" >user:</label><select name="user" class="ged" style="color: black; width:30%; padding: 8px; border: 2px solid steelblue; border-radius: 4px; margin-left: 8%;">
	<option>Head of department</option>
	<option>Administrator</option>
	<option>Registrar</option>
	<option>Librarian</option>
</select><br>
<label for="Gender:"class="lbl" >Gender:</label><select name="gender" class="ged" style="color: black; width:30%; padding: 8px; border: 2px solid steelblue; border-radius: 4pxcontact;">>
	<option>Male</option>
	<option>Female</option>
	<option>Others</option>
</select>

<label for="email" class="lbl2"> Email</label>
<input type="email" class="demoInputBox" name="email"  required><br>
<label for="password" class="lbl" >Password</label>
<input type="password" class="demoInputBox" name="password" required>
<label for="[password]"class="lbl2" >Confirm Password</label>
<input type="password" class="demoInputBox" name="cpassword" required><br><br>
<input type="submit" name="register-user" value="Register" class="btnRegister" required>
<button  type="cancel" name="cancel" ><a href="admin-home.php"> Cancel</a></button>
</form>
</div>
</bod/>
</html>
