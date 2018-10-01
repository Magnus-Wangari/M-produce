<?php

include 'includes/db.inc.php';

/*if(isset($_GET['code'])){
	$get_username = $_GET['username'];
	$get_code = $_GET['code'];

	$sql ="SELECT * FROM users WHERE username='$get_username' ";
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
							<a href ="signup.php">Sign up</a>
							<form action="includes/login.inc.php" method="POST">
								<input type ="text" name="username" placeholder = "Username/Email"/>
								<input type ="password" name = "password" placeholder = "Password"/>
								<button type ="submit" name = "submit">Login</button>
							</form>

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
						<inpu type="hidden" name="username" value="$db_username" />
						<button type = "submit" value="Submit" name ="reset">Reset</button> 
					</form>
				</div>
			</section>

		</body>
		</html>
		';
	}
}
*/
if(!isset($_GET['code'])){
echo'
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
					<a href ="signup.php">Sign up</a>
					<form action="includes/login.inc.php" method="POST">
					<input type ="text" name="username" placeholder = "Username/Email"/>
					<input type ="password" name = "password" placeholder = "Password"/>
					<button type ="submit" name = "submit">Login</button>
					</form>

				</div>
			</div>
		</nav>
	</header>
	<section class = "main-container">
		<div class = "main-wrapper">
			<h2>Reset Password</h2>

			<form class= "signup-form" action="forgot.php" method="POST">
				<input type = "text" name = "username" placeholder="Username" required />
				<input type = "email" name = "email" placeholder = "Email" required />
				<button type = "submit" value="Submit" name ="reset">Reset</button> 
			</form>
		</div>
	</section>

</body>
</html>
';

if(isset($_POST['reset'])){ 

	$username = $_POST['username'];
	$email = $_POST['email'];

	$sql = "SELECT* FROM users WHERE username = '$username'";
	$query = mysqli_query($conn, $sql);
	$numrow = mysqli_num_rows($query);

	if($numrow = 0){
		header("Location: forgot.php?forgot=noUsername");
		exit();
	} else{

		while ($row = mysqli_fetch_assoc($query)) {
			$db_email =$row['email'];
		}
		if($email != $db_email){
			header("Location: forgot.php?forgot=invalidemail");
			$msg = "Invalid email";
			echo "<script type='text/javascript'>
			window.location.href='../index.php';
			alert('$msg');
			</script>";
			exit();
		} else{
			$code = rand(10000, 1000000);
			$to= $db_email;
			$subject ="Password Reset";
			$message = "
			This ia an automated email. Please DO NOT reply to this email.
			Click the link below or paste it into your browser 
			
			http://localhost/M-produce/includes/forgot.inc.php?code=$code&username=$username
			";

			$header = "FROM: mproduceproject@gmail.com"; 

			$sql = "UPDATE users SET passreset = '$code' WHERE username ='$username'";

			mysqli_query($conn, $sql);

			if(@mail($to, $subject, $message, $header)){
				$msg = "Check your email";
				echo "<script type='text/javascript'>
				window.location.href='index.php';
				alert('$msg');
				</script>";
			}
			else{
				header("Location: forgot.php?forgot=error");
				exit();
			}
		}
	}
}	
}

?>