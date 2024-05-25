<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>



<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>
	<h2> Hello, <?php echo $user_data['user_name']; ?></h2>

	<a href="logout.php">Logout</a>
	<style type="text/css">
		h1 {text-align: center;}
	</style>

	<h1> GP Event Management </h1>

	<style type="text/css">
	body{
		background-image:  url('login.png');
		background-size: cover;
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

		background-color: white;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	#box{
		width:  320px;
		height:  540px;
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
	.event{
		width:  100px;
		height:  100px;
		border-radius:  50%;
		position:  absolute;
		top:  -50px;
		left: calc(50% - 50px);
	}
	</style>

	<div id="box" >
		<img src="event.jfif" class = "event">
		<div class="container">
		<div class = "header" >
			<h2 style = "text-align:center">Details of the Event</h2>
		</div>
		<form align = "center"  method= "post" >

			<div>
				<label for="Event-Type">Type of Event :</label>
				<input type="text" name="Event-Type"required>

			</div>	
			<div>
				<label for="Budget"> Budget :</label>
				<input type="integer" name="Budget"required>

			</div>
			<div>
				<label for="Number-of-attendees"> Number of Attendees :</label>
				<input type="integer" name="Number-of-attendees"required>

			</div>
			<div>
				<label for="location"> Location :</label>
				<input type="text" name="location"required>

			</div>	
			<div>
				<label for="Description"> Description :</label>
				<input type="text" name="Description"required>

			</div>	
			<button type = "submit" name="reg_user" id="submit"> Submit</button>

</body>
</html>