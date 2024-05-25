<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">
		h1 
		{
			text-align: center;

		}
	</style>

	<h1 style="color: orange"> GP Event Management </h1>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	#box{
		width:  320px;
		height:  420px;
		background:  #000;
		color:  #fff;
		top:  25%;
		left: 39%;
		position:  absolute;
		trasnform:  translate(-50%,-50%);
		box-sizing:  border-box;
		padding:  70px 30px;
	}
	#box p{
		margin:  0;
		padding:  0;
		font-weight:  bold;
	}

	#box input{
		width:  100%;
		margin-bottom: 20px;
	}

	#box input[type="text"], input[type="password"]
	{
		border:  none;
		border-bottom: 1px solid #fff;
		background: transparent;
		outline:  none;
		height: 40px;
		color:  #fff;
		font-size:  16px;
	}

	#box input[type="submit"]
	{
		border:  none;
		outline: none;
		height: 40px;
		background: #fb2525;
		color: #fff;
		font-size: 18px;
		border-radius:  20px;
	}

	#box input[type="submit"]:hover
	{
		cursore:  pointer;
		background: #ffc107;
		color:  #000;
	}
	.avatar{
		width:  100px;
		height:  100px;
		border-radius:  50%;
		position:  absolute;
		top:  -50px;
		left: calc(50% - 50px);
	}


	</style>

	<div id="box">
		<img src="avatar.jpg" class = "avatar">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white; text-align: center;">Signup</div>
			<p> Username</p>
			<input id="text" type="text" placeholder= "Enter Username" name="user_name"><br><br>
			<p> Password </p>
			<input id="text" type="password" placeholder="Enter Password" name="password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>