<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<header>
		<nav>
			<div class = "main-wrapper">
				<ul>
					<li><a href="index.php"><h2>HOME</h2></a></li>

				</ul>
				<div class = "nav-login">
					<?php
						if(isset($_SESSION['username'])){
							echo'<form action = "includes/logout.inc.php" method="POST">
									<button type ="submit" name = "submit">Logout</button>
								</form>
								<a href = "" >Notification</a>
								';
						}else{
							echo'<a href = "forgot.php">Forgot password</a>
								<a href ="signup.php">Sign up</a>
								<a href ="login.php">Login</a>
								';
						}
					?>
					
				</div>
			</div>
		</nav>
	</header>