<?php

include 'db.inc.php';

if(isset($_GET['code'])){
	$get_username = $_GET['username'];
	$get_code = $_GET['code'];

	$sql ="SELECT * FROM useracc WHERE username='$get_username'";
	$query = mysqli_query($conn, $sql);

	while($row =  mysqli_fetch_assoc($query)){
		$db_code = $row['passreset'];
		$db_username =$row['username'];

	}
	if($get_username == $db_username && $get_code == $db_code){
		echo'
		<!DOCTYPE html>
		<html>
		<head>
			<title></title>
			<link rel="stylesheet" type="text/css" href="../style.css">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
  			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		</head>
		<body>
			<header>
				<nav>
					<div class = "main-wrapper">
						<ul>
							<li><a href="../index.php"><h2>HOME</h2></a></li>
						</ul>
						<div class = "nav-login">
							<a href ="../signup.php">Sign up</a>
							<a href ="../login.php">Login</a>

						</div>
					</div>
				</nav>
			</header>
			<section class = "main-container">
				<div class = "main-wrapper">
					<h2>Reset Password</h2>

					<form class= "signup-form" action="passreset.inc.php?code=$get_code" method="POST">
						<input type = "password" name = "password" placeholder="New Password" required />
						<input type = "password" name = "password1" placeholder = "Confirm Password" required />
						<input type="hidden" name="username" value="$db_username" />
						<button type = "submit" value="Submit" name ="reset">Reset</button> 
					</form>
				</div>
			</section>

		</body>
		</html>
		';
	}
}