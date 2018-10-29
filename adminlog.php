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
    <link rel="stylesheet" type="text/css" href="admin.css">
<style>
        
       body {
    margin: 0;
    padding: 0;
    background: linear-gradient(rgba(0, 0, 0, 0.85), rgba(164, 222, 102, 0.10));
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
  

}

.loginbox {
    box-shadow: 30px 30px 30px black;
    
    width: 320px;
    height: 420px;
    
    color: azure;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%, -50%);
    box-sizing: border-box;
    padding: 70px 30px;
     background: linear-gradient(rgba(0,0,0,0.85), rgba(255,255,255,0.10));
     background-size: cover;
    flex: 1;
    padding: 1rem;
    transition: all .2s ease-in-out;
    box-shadow: 10px 10px grey;



}

.avatar {
   
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% -50px);

}

h1 {
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;


}

.loginbox p {
    margin: 0;
    padding: 0;
    font-weight: bold;

}

.loginbox input {
    width: 100%;
    margin-bottom: 20px;
}

.loginbox input[type="text"],
input[type="password"] {
    border: none;
    border-bottom: 1px solid azure;
    background: transparent;
    outline: none;
    height: 40px;
    color:navajowhite;
    font-size: 16px;
}

.loginbox input[type="submit"] {
    border: none;
    outline: none;
    height: 40px;
    background:powderblue;
    color: darkblue;
    font-size: 18px;
    border-radius: 20px;

}

.loginbox input[type="submit"]:hover {
    cursor: pointer;
    background: azure;
    color: aquamarine;
}

.loginbox a:hover {
    color: darkturquoise;
}



button {
    border: none;
    outline: none;
    height: 100px;
    background: grey;
    color: cyan;
    font-size: 18px;
    border-radius: 20px;
}

button:hover {
    cursor: pointer;
    background: azure;
    color: aquamarine;
}
 
        
        
        
</style>
    <body>

        <div class="loginbox">
            
            <h1 style="color:white">M-Produce Admin</h1>
            <form action="" method="post">
                <p>Username </p>
                <input type="text" name="username" placeholder="Enter Username">
                <P>Password</P>
                <input type="password" name="password" placeholder="Enter Password">
                <input type="submit" name="" value="login">
               

            </form>
        </div>

    </body>

    </html>
