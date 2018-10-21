<?php

include 'db.inc.php';

if(isset($_POST['reset'])){

	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$password1 = mysqli_real_escape_string($conn, $_POST['password1']);
	$post_username = $_POST['username'];
	$code = $_GET['code'];

	if ($password != $password1) {
		$msg = "Password must match";
		echo "<script type='text/javascript'>alert('$msg');</script>";
	}else{
		$hashedpassword = password_hash($password, PASSWORD_DEFAULT);

		$sql ="UPDATE useracc SET password = '$hashedpassword', passreset = '0' WHERE username='$post_username'";
		$query = mysqli_query($conn, $sql);

		$msg = "Password Changed";
		echo "<script type='text/javascript'>
		window.location.href='../index.php';
		alert('$msg');
		</script>";
	}
}else{

	header("Location: ../forgot.php?forgot=error");
	
	/*$msg="Match the Passwords";
	echo "
	<script type='text/javascript'>
	 alert('$msg');
	</script>";*/
	exit();
}


?>