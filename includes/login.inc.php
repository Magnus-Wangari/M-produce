<?php
session_start();

if(isset($_POST['submit'])){
    
	include 'db.inc.php';
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	//Error handlers
	//Check if inputs are empty
	if(empty($username)|| empty($password)){
		header("Location: ../login.php?login=empty");
		exit();
	}else{
         
		$sql = "SELECT * FROM useracc WHERE username = '$username' OR email = '$username'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck < 1){
			header("Location: ../login.php?login=error");
			exit();
		}else{
			if($row = mysqli_fetch_assoc($result)){
				//dehashing the password
				$hashedpasswordCheck = password_verify($password, $row['password']);
				
				if($hashedpasswordCheck == false){
				
				header("Location: ../login.php?login=wrongpassword");
				exit();

				}elseif($hashedpasswordCheck == true){
					//Log in  the user here
					$_SESSION['first'] = $row['first_name'];
					$_SESSION['last'] = $row['last_name'];
					$_SESSION['username'] = $row['username'];
					$_SESSION['dob'] = $row['dob'];
					$_SESSION['gender'] = $row['gender'];
					$_SESSION['email'] = $row['email'];
					$_SESSION['phone'] = $row['telephone'];
					$_SESSION['password'] = $row['password'];
					$_SESSION['county'] = $row['county'];
					$_SESSION['category'] = $row['category'];
					header("Location: ../userprofile.php?login=success");
					exit();
				}
			}								
		}
	}
}else{
	header("Location: ../login.php?login=error");
	exit();
}
