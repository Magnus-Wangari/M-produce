 <?php
 
   include('config.php');
   session_start();
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    //username and password sent from form  
   
      $myfirst_name=mysqli_real_escape_string($db,$_POST['username']);
      $mypassword=mysqli_real_escape_string($db,$_POST['pass']);
      
      $sql="SELECT * FROM `admin` WHERE username='$myfirst_name' and pass='$mypassword'";
      $result=mysqli_query($db,$sql);
      $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count=mysqli_num_rows($result);
      
      //if result matched first name an d password, tbale row must be one row
      
      if($count==1){
        
          $_SESSION['login_user']=$myfirst_name;
          
          header("location:dash.php");
            echo  "". $myfirst_name. "";
      }else {
          $error="Your Login name or password is incorrect";
      }
  } 
      ?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Login page</title>
        <meta charset="utf-8">
    </head>
    <link rel="stylesheet" type="text/css" href="admin.css">

    <body>

        <div class="loginbox">
            <img src="f2.png" class="avatar"> 
            <h1 style="color:black">M-Produce Admin</h1>
            <form action="" method="post">
                <p>Username </p>
                <input type="text" name="username" placeholder="Enter Username">
                <P>Password</P>
                <input type="password" name="pass" placeholder="Enter Password">
                <input type="submit" name="" value="login">
               

            </form>
        </div>

    </body>

    </html>
