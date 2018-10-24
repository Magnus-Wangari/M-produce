<?php

include ('config.php');

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
					<a href = "signup.php">Sign up</a>
					<a href = "login.php">Login</a>
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

	$sql = "SELECT* FROM useracc WHERE username = '$username'";
	$query = mysqli_query($db, $sql);
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
			window.location.href='index.php';
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

			$sql = "UPDATE useracc SET passreset = '$code' WHERE username ='$username'";

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