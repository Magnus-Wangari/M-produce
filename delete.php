<?php
require('config.php');
$email=$_REQUEST['email']; 
$query = "DELETE FROM useracc WHERE email='".$email."'"; 
$result = mysqli_query($db,$query) or die ( mysqli_error($db));
header("Location: view.php"); 
?>