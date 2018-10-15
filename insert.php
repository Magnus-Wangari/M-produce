<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "sign");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Escape user inputs for security
$first_name = $mysqli->real_escape_string($_REQUEST['first_name']);
$last_name = $mysqli->real_escape_string($_REQUEST['last_name']);
$email = $mysqli->real_escape_string($_REQUEST['email']);
$gender = $mysqli->real_escape_string($_REQUEST['gender']);
$password = $mysqli->real_escape_string($_REQUEST['password']);
$vpassword = $mysqli->real_escape_string($_REQUEST['vpassword']);
$date = $mysqli->real_escape_string($_REQUEST['date']);
// attempt insert query execution
$sql = "INSERT INTO signup (first_name, last_name, email, gender, password, vpassword, date) VALUES ('$first_name', '$last_name', '$email','$gender','$password','$vpassword','$date')";
if($mysqli->query($sql) === true){
    echo "Account succesfully created.";
    
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
// Close connection
$mysqli->close();
?>
<html>
<head><title></title></head>
<body>
    <h3>You can now login 
       <p> <a href=login.php>Log in</a></p>
    </h3>
    
    </body>
</html>