 <?php
 
   include('config.php');
   session_start();
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    //username and password sent from form  
   
      $myfirst_name=mysqli_real_escape_string($db,$_POST['username']);
      $mypassword=mysqli_real_escape_string($db,$_POST['password']);
      
      $sql="SELECT * FROM `adminacc` WHERE username='$myfirst_name' and password='$mypassword'";
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
   <link href="forms.css" rel="stylesheet" type="text/css">
    <body>
 <section class = "xop-container"style="height:100%">
        <div class="xop-left">
            <article>
                <h1>M-produce Admin</h1>
            </article>
        </div>
        
        <div class=xop-right>
            <article>
                <h1>LOGIN</h1>
            </article>

            <div class = "loginbox">

                <form class= "signup-form" action="" method="POST">
                    <input type = "text" name = "username" placeholder="Username/Email" />
                    <input type = "password" name = "password" placeholder="Password" />
                    <input type = "submit" name ="submit" value=Login>
                   <!-- <p><a href="forgot.php">Forgot Password</a></p>-->
                </form>
            </div>
        </div>
    </section>
    </body>

    </html>
