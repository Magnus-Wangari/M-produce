<?php
 
   include('config.php');
   session_start();

  if($_SERVER["REQUEST_METHOD"]=="POST"){
    //username and password sent from form  
   
      $email=mysqli_real_escape_string($db,$_POST['email']);
      $password=mysqli_real_escape_string($db,$_POST['password']);
      
      $sql="SELECT * FROM `useracc` WHERE email='$email' and password='$password'";
      $result=mysqli_query($db,$sql);
      $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count=mysqli_num_rows($result);
      
      //if result matched first name and password, table row must be one row
      
      if($count==1){
         $email=$_SESSION['email'];
        header("Location: userprofile.php");
        
          //$_SESSION['login_user']=$email;
          //$email=$_SESSION['email'];
         //header("Location: userprofile.php");
           
      }else {
          $error="Your Login name or paswword is incorrect";
      }
  } 
      ?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Login page</title>
        <meta charset="utf-8">
    </head>
    <link rel="stylesheet" type="text/css" href="log.css">

    <body>

        <div class="loginbox">
            <img src="f2.png" class="avatar"style=width:20px;
                 >
            <h1 style="color:cadetblue">M-Produce</h1>
            <form action="" method="post">
                <p>Username </p>
                <input type="email" name="email" placeholder="Enter email">
                <P>Password</P>
                <input type="password" name="password" placeholder="Enter Password">
                <input type="submit" name="" value="login">
                <a href="signup.html">Create account</a>

            </form>
        </div>

    </body>

    </html>
