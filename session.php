<?php
    session_start();
    include 'includes/db.inc.php';

   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select email from useracc where email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['email'];
   
   /*if(!isset($_SESSION['login_user'])){
      header("location:login.inc.php");
      exit();
   }*/