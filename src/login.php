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

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
		h1 {text-align: center;}
	</style>

	<h1 style="color: lightyellow;"> GP Event Management </h1>

	<style type="text/css">

	body{
		background-image: url(login.png);
		background-size: cover;
		background-position: center;
		background-attachment: fixed;
		
	}
	
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
</head>
<body>

	<div id="box">
		<img src="avatar.jpg" class = "avatar">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white ; text-align: center;">Login</div>
			<p> Username</p>
			<input id="text" type="text" placeholder= "Enter Username" name="user_name"><br><br>
			<p> Password </p>
			<input id="text" type="password" placeholder="Enter Password" name="password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="signup.php">Click to Signup</a><br><br>
		</form>
	</div>
</body>
</html>