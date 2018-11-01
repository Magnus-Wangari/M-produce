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
				//De-hashing the password
				$hashedpasswordCheck = password_verify($password, $row['password']);
				
				if($hashedpasswordCheck == false){
				    header("Location: ../login.php?login=wrongpassword");
				    exit();
				}elseif($hashedpasswordCheck == true){

                    header("Location: ../posts.php?login=success");

					//Log in  the user here
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['first'] = $row['firstname'];
                    $_SESSION['last'] = $row['lastname'];
                    $_SESSION['dob'] = $row['dob'];
                    $_SESSION['gender'] = $row['gender'];
                    $_SESSION['phone'] = $row['telephone'];
                    $_SESSION['county'] = $row['county'];
                    $_SESSION['category'] = $row['category'];

				}
			}								
		}
	}
}else{
	header("Location: ../index.php?login=error");
	exit();
}
