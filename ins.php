<?php
require('config.php ');



if(isset($_POST['new']) && $_POST['new']==1){
    $name = $_REQUEST['firstname'];
    $email =$_REQUEST['em'];
    $pass = $_REQUEST['pass'];
    $date = $_REQUEST["dat"];
    $time = $_REQUEST["time"];
    $dep = $_REQUEST["dep"];
    $ins_query="insert into new_record
    (`firstname`,`em`,`pass`,`dat`,`time`,`dep`)values
    ('$name','$email','$pass','$date','$time','$dep')";
    mysqli_query($db,$ins_query)
    or die(mysql_error());
    $status = "New Record Inserted Successfully.
    </br></br><a href='view.php'>View Inserted Record</a>";
}
   
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body style=background-image:url(blur.jpg)>
<div class="form">
    <div class=nav style="background-color:transparent;display:block;text-decoration:none;padding:10px">
<p><a href="dash.php">Dashboard</a> 
| <a href="view.php">View Orders</a> 
| <a href="logoutad.php">Logout</a></p>
    </div>
<div>
<h1 style="text-align:center;color:dodgerblue">Insert New Order</h1>
<form name="form" method="post" action="" style="text-align:center"> 

     <p><label for="firstname">First name: </label>
            <p><input type="text" id="first" name="firstname" required></p>
            <p><label for="email">Email Address:</label></p>
            <p><input type="email" id="eme" name="em" required></p>
            <p><label for="Password">Password:</label></p>
            <P><input type="password" id="pass1" name="pass" required></P>
            <label for="Date">Date of Order</label>
            <p><input type="date" id="date" name="dat" required></p>
            <label for="Time">Time</label>
            <p><input type="time" id="tim" name="time" required></p>
            <p style="color: dodgerblue;font-family: sans-serif;font-size:22px">Choose Category</p>
            <select name="dep" size="4">
    <option value="cons">Farmer</option>
    <option value="chest">Consumer</option>
    
  </select>
    <br>
    <p><input type="submit" id="sub" value="Submit" class="btn btn-primary"></p>
</form>

</div>
</div>
</body>
</html>