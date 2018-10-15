<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$db = new mysqli("localhost", "root", "", "cs project");
 
// Check connection
if($db === false){
    die("ERROR: Could not connect. " . $db->connect_error);
}
 
// Print host information
echo "Connect Successfully. Host info: " . $db->host_info;
 
// Close connection
$db->close();
?>