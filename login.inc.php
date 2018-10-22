<?php
session_start();
include('session.php');
include('config.php');

if(isset($_POST['submit'])){
    
	
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
	//Error handlers
	//Check if inputs are empty
	if(empty($username)|| empty($password)){
		header("Location:header.php?login=empty");
		exit();
	}else{
         
		$sql = "SELECT * FROM useracc WHERE username = '$username' OR email = '$email'";
		$result = mysqli_query($db, $sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck < 1){
			header("Location:login.php?login=error");
			exit();
		}else{
			if($row = mysqli_fetch_assoc($result)){
				//dehashing the password
				$hashedpasswordCheck = password_verify($password, $row['password']);
				
				if($hashedpasswordCheck == false){
				
				header("Location:header.php?login=wrongpassword");
				exit();

				}elseif($hashedpasswordCheck == true){
					//Log in  the user here
					$_SESSION['first'] = $row['firstname'];
					$_SESSION['last'] = $row['lastname'];
					$_SESSION['username'] = $row['username'];
					$_SESSION['email'] = $row['email'];
					$_SESSION['phoneNumber'] = $row['telephone'];
					$_SESSION['county'] = $row['county'];
					$_SESSION['category'] = $row['category'];
                    $_SESSION['password'] = $row['password'];
                    
					header("Location:posts.php?login=success");
					exit();
				}
			}								
		}
	}
}else{
	header("Location:login.php?login=error");
	exit();
}
