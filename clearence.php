<?php require '../dbcontroller.php'; ?>

<!DOCTYPE html>
	
<head>
<title>appeal form</title>
<style type="text/css">
	form{
		 width: 80%;
		margin: 2px auto;
		border-radius: 10px;
		background: white;
		color: black;
		padding: 2px;
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
		width: 20%;
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
		margin-left: 8%;

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
	
	<?php include('s-header.php'); ?>
<form name="frmRegistration" method="post" action="clear.php"> 
	<H2>Clearence Form</H2>
<label for="addimission" class="lbl" >addimission Number</label>
<input type="text" class="fname" name="addimission"  required>
<label for="case"  class="lbl2"> First Name</label>
<input type="text" class="fname" name="fname" required><br><br>
<label for="case"  class="lbl2"> Sir Name</label>
<input type="text" style="margin-left: 6%;"  class="fname" name="lname" required>

<label for="Level:"class="lbl" style="margin-left: 3%;" >Level:</label><select name="level" class="ged" style="color: black; width:30%; padding: 8px; border: 2px solid steelblue; border-radius: 4px;">>
	<option>Certificate</option>
	<option>Deploma</option>
	<option>Barchelor</option>
	<option>Master</option>
	<option>PhD</option>
</select><br>

<label for="case"  class="lbl2"> Date of clearence</label>
<input type="Date" style="margin-left: 1%;" class="fname" name="date" required><br>





<br><br>
<input type="submit" name="clear" value="Submit" class="btnRegister" required>
<button  type="cancel" name="cancel" ><a href="student-home.php"> Cancel</a></button>
</form>
</div>
</bod/>
</html>
