<?php

if(isset($_POST['submit'])){

	include('config.php');

	$first = mysqli_real_escape_string($db, $_POST['firstname']);
	$last = mysqli_real_escape_string($db, $_POST['lastname']);
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$phoneNumber = mysqli_real_escape_string($db, $_POST['telephone']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
	$county = mysqli_real_escape_string($db, $_POST['county']);
	$category = mysqli_real_escape_string($db, $_POST['category']);

	//Error handlers
	//Check for empty fields
	if(empty($first)|| empty($last) || empty($username)|| empty($email)|| empty($phoneNumber)|| empty($password) || empty($county) || empty($category)){
		header("Location:signup.php?signup=empty");
		exit();
	}else{
		//Check if input characters are valid
		if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)){
			header("Location:signup.php?signup=invalid");
			exit();
		}
		else{
				//Check if email is valid
				if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
					header("Location:signup.php?signup=invalidemail");
					exit();
				}else{
					//Check username has not been repeted
					$sql = "SELECT * FROM useracc WHERE username = '$username'";
					$result = mysqli_query($db, $sql);
					$resultCheck = mysqli_num_rows($result);
					
					if($resultCheck > 0){
						header("Location:signup.php?signup=usertaken");
						exit();
					}else{
						//hashing the password
						$hashedpassword = password_hash($password, PASSWORD_DEFAULT);
						//Insert the user into the database
						$sql = "INSERT INTO useracc(firstname, lastname, username, email, telephone, password, county, category) VALUES ('$first', '$last', '$username', '$email', '$phoneNumber', '$hashedpassword', '$county', '$category');";
						mysqli_query($db, $sql);
                        
					header("Location:login.php=?signup success");
						exit();
					}
				}
			}
		}
    
		
	}else{
		header("Location:login.php");
		exit();
	}