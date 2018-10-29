<?php
session_start();

if(isset($_POST['submit'])){

    include ('config.php');
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    //Error handlers
    //Check if inputs are empty
    if(empty($username)|| empty($password)){
        header("Location:login.php?login=empty");
        exit();
    }else{

        $sql = "SELECT * FROM useracc WHERE username = '$username' OR email = '$username'";
        $result = mysqli_query($db, $sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck < 1){
            header("Location: login.php?login=error");
            exit();
        }else{
            if($row = mysqli_fetch_assoc($result)){
                //De-hashing the password
                $hashedpasswordCheck = password_verify($password, $row['password']);

                if($hashedpasswordCheck == false){
                    header("Location: login.php?login=wrongpassword");
                    exit();
                }elseif($hashedpasswordCheck == true){
                    //Log in  the user here
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['username'] = $row['username'];
                    /*$_SESSION['first'] = $row['first_name'];
                    $_SESSION['last'] = $row['last_name'];
                    $_SESSION['dob'] = $row['dob'];
                    $_SESSION['gender'] = $row['gender'];
                    $_SESSION['phone'] = $row['telephone'];
                    $_SESSION['password'] = $row['password'];
                    $_SESSION['county'] = $row['county'];
                    $_SESSION['category'] = $row['category'];*/
                    header("Location: posts.php?login=success");
                    exit();
                }
            }
        }
    }
}else{
    header("Location: index.php?login=error");
    exit();
}
