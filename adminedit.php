<?php
require('config.php');

$email=$_REQUEST['email'];
$query = "SELECT * from useracc where email='".$email."'"; 
$result = mysqli_query($db, $query) or die ( mysqli_error($db));
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Edit user accounts</title>
<link rel="stylesheet" href="" />
</head>
    
    <style>
        ul {
        list-style-type: none;
        padding: 10px;
        margin: 0;
        background-color: forestgreen;
        overflow: hidden;
        border-radius:10px;

    }

    li {

        float: right;


    }

    li a {
        display: block;
        text-decoration: none;
        text-align: right;
        color: white;
        padding: 0px 10px;
        font-family: sans-serif;
        font-size: 18px;


    }
    h1{
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        color:forestgreen;
    }
        
        
        
        input{
            border-style:solid;
            border-color:forestgreen;
            border-width:1px;
            width:600px;
            border-radius:30px;
            padding:15px;
            font-size:17px;
            color:grey;
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        }
        input[type=submit]{
    position: relative;
    background-color: forestgreen;
    font-size:15px;
    width:7%;
    color:white;
    border:solid;
    border-color:transparent;
    border-radius:50px;
   
        }
    
    
    </style>
    
    
    
    
    
    
<body >
<div class="form">

   <ul>
            <li>
                <p><b><a href="logoutad.php">Logout</a></b></p>
            </li>
            <li>
                <p><b><a href="ins.php">Insert New Order</a></b></p>
            </li>
            <li>
                <p><b><a href="view.php">View Orders</a></b></li>
            <li>
                <p><b><a href="view.php">View user Accounts</a></b></li>
            <li>
                <p><b><a href="viewposts.php">View Posts</a></b></li>




        </ul>
 
    
    
    <img src=generatedtext.jpg style=width:300px>
<h1 style="color:forestgreen;text-align:center">EDIT USER ACCOUNT</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{

 $firstname=$_REQUEST["firstname"];
$lastname=$_REQUEST["lastname"];
$dob=$_REQUEST["dob"];
$gender=$_REQUEST["gender"];
$email =$_REQUEST["email"];
$telephone = $_REQUEST["telephone"];
$category = $_REQUEST["category"]; 
$county = $_REQUEST["county"]; 
$password = $_REQUEST["password"];
    
  $update="update useracc set firstname='".$firstname."', lastname='".$lastname."', dob='".$dob."',
gender='".$gender."', email='".$email."',
telephone='".$telephone."', category='".$category."', county='".$county."', password='".$password."'where email='".$email."'";  
    
mysqli_query($db, $update) or die(mysqli_error($db));
$status = "Record Updated Successfully. </br></br>
<a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}
    else {
?>
<div>
<form name="form" method="post" action=""style="font-size:22px"> 
<input type="hidden" name="new" value="1" />
    
<p><input type="text" name="firstname" placeholder="Enter Name" 
required value="<?php echo $row['firstname'];?>" /></p>
    
    <input name="lastname" type="hidden" value="<?php echo $row['lastname'];?>" />
<p><input type="text" name="lastname" placeholder="Enter Name" 
required value="<?php echo $row['lastname'];?>" /></p>
    
    <input name="dob" type="hidden" value="<?php echo $row['dob'];?>" />
<p><input type="date" name="dob" placeholder="Enter DOB" 
required value="<?php echo $row['dob'];?>" /></p>
    
    <input name="gender" type="hidden" value="<?php echo $row['gender'];?>" />
<p><input type="text" name="gender" placeholder="Enter gender" 
required value="<?php echo $row['gender'];?>" /></p>
    
    <p><input type="email" name="email" placeholder="Enter Email" 
optional value="<?php echo $row['email'];?>" /></p>
    
    <p><input type="text" name="telephone" placeholder="Enter telephone" 
required value="<?php echo $row['telephone'];?>" /></p>
    
<p><input type="text" name="category" placeholder="Enter category" 
required value="<?php echo $row['category'];?>" /></p>
    
<p><input type="text" name="county" placeholder="Enter county" required value=
"<?php echo $row['county'];?>" /></p>
    
    <p><input type="password" name="password" placeholder="password" required value=
"<?php echo $row['password'];?>" /></p>
    


    
    
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>