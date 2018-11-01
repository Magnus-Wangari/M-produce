<?php

//$email=$_REQUEST['email'];
                              
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Edit Profile</title>

</head>
    <style>
    
     body{
                
            }
            
     #box{
           align-content:left;
           left:5px;
           
            }
           input[type=submit] {
    position: relative;
    background-color: forestgreen;
    font-size:18px;
    padding:15px;
    width:25%;
    color:white;
    border-style:solid;
    border-color:white;
    border-radius:50px;
    border-width:1px;
   
}
 input[type=file] {
    padding:10px;
    margin:8px;
    position: relative;
    background-color: forestgreen;
    font-size:18px;
    width:20%;
    color:black;
    border:solid;
    border-color:transparent;
    border-radius:30px;
}
input[type=text] {
    padding:10px;
    margin:8px;
    width:55%;
    border:solid;
    border-color:limegreen;
    border-radius:30px;
    opacity:0.6;
    border-width:1px;
}
            input[type=email] {
    padding:10px;
    margin:8px;
    width:55%;
    border:solid;
    border-color:limegreen;
    border-radius:50px;
    opacity:0.6;
    border-width:2px;
    
}
            select {
    padding:10px;
    margin:8px;
    width:55%;
    border:solid;
    border-color:limegreen;
    border-radius:30px;
    opacity:0.6;
    border-width:1px;
    
}
                 input[type=date] {
    padding:10px;
    margin:8px;
    width:55%;
    border:solid;
    border-color:limegreen;
    border-radius:10px;
    opacity:0.6;
     border-width:1px;
    
    
}
        h2 {
        text-align: center;
        padding: 5px;
        color: black;
        font-family:sans-serif;
    }


#img-upload{
    width: 100%;
}
    img {
        width: 0%;
        border-radius:0px;
        padding:0px;
        align-self: center;
        justify-content: center;

    }        
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
            color: forestgreen;
            text-align: center;
        }
    
    
    
    </style>
    
    
<body style="background-image:url(blu.jpg)">
<div class="form">
    
    
    <ul>
        <li>
            <p><b><a href="logoutad.php">Logout</a></b></p>
        </li>
        <li>
            <p><b><a href="http://www.agricultureauthority.go.ke/category/prices/">News Feeds</a></b></p>
        </li>
        <li>
            <p><b><a href="userprofile.php">View Profile</a></b></li>
        
        <li>
            <p><b><a href="posts.php">View Posts</a></b></li>




    </ul>
<p><a href="userprofile.php">Back to Profile</a> 
<!--<a href="ins.php">Insert New Record</a> 
 <a href="logout.php">Logout</a></p> -->
<div class=pic>
       
   <h1> Edit Profile</h1>
        </div>

<?php
    
 #require('config.php');
#session_start();
include('session.php');
     
// $email = $_POST[‘email’]; 
#$query = "SELECT * from useracc where 'email'='".$_SESSION['login_user']."'";
$query="Select * from useracc where email = '$user_check'";
#$query = "SELECT * from useracc where 'email'='".$_SESSION['email']."'"or die(mysql_error());
$result = mysqli_query($db, $query) or die ( mysqli_error($db));
$row = mysqli_fetch_assoc($result);

$status = "";

if(isset($_POST['email']))//&& $_POST['firstname']==1)

{
    
$firstname=$_REQUEST["firstname"];
$lastname=$_REQUEST["lastname"];
$dob=$_REQUEST["dob"];
$gender=$_REQUEST["gender"];
$email =$_REQUEST["email"];
$telephone = $_REQUEST["telephone"];
$category = $_REQUEST["category"]; 
$county = $_REQUEST["county"]; 
//$county = $_REQUEST["county"]; 
    
$update="update useracc set firstname='".$firstname."', lastname='".$lastname."', dob='".$dob."',
gender='".$gender."', email='".$email."',
telephone='".$telephone."', category='".$category."', county='".$county."' where email='".$email."'";
mysqli_query($db, $update) or die(mysqli_error($db));
$status = "Record Updated Successfully. </br></br>
<a href='userprofile.php'>View Updated Profile</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}
    else {
?>
<div>
    <h2>
                <?php echo $row["firstname"]; ?>
                <?php echo $row["lastname"]; ?></h2><br/>
            <p>
<form name="form" method="post" action=""style="text-align:center;font-size:22px"> 
<input type="hidden" name="new" value="1" />
<input name="email" type="hidden" value="<?php echo $row['email'];?>" />
    
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
    
    <p><input type="text" name="email" placeholder="Enter Email" 
optional value="<?php echo $row['email'];?>" /></p>
    
    <p><input type="text" name="telephone" placeholder="Enter telephone" 
required value="<?php echo $row['telephone'];?>" /></p>
    
<p><input type="text" name="category" placeholder="Enter category" 
required value="<?php echo $row['category'];?>" /></p>
 <select name="county"
    >              
					<option value=""> <?php echo $row['county'];?></option>
					<option value="Baringo">Baringo</option>
					<option value="Bomet">Bomet</option>
					<option value="Bungoma">Bungoma</option>
					<option value="Busia">Busia</option>
					<option value="Elgeyo Marakwet">Elgeyo Marakwet</option>
					<option value="Embu">Embu</option>
					<option value="Garissa">Garissa</option>
					<option value="Homa Bay">Homa Bay</option>
					<option value="Isiolo">Isiolo</option>
					<option value="Kajiado">Kajiado</option>
					<option value="Kakamega">Kakamega</option>
					<option value="Kericho">Kericho</option>
					<option value="Kiambu">Kiambu</option>
					<option value="Kilifi">Kilifi</option>
					<option value="Kirinyaga">Kirinyaga</option>
					<option value="Kisii">Kisii</option>
					<option value="Kisumu">Kisumu</option>
					<option value="Kitui">Kitui</option>
					<option value="Kwale">Kwale</option>
					<option value="Laikipia">Laikipia</option>
					<option value="Lamu">Lamu</option>
					<option value="Machakos">Machakos</option>
					<option value="Makueni">Makueni</option>
					<option value="Mandera">Mandera</option>
					<option value="Meru">Meru</option>
					<option value="Migori">Migori</option>
					<option value="Marsabit">Marsabit</option>
					<option value="Mombasa">Mombasa</option>
					<option value="Muranga">Muranga</option>
					<option value="Nairobi">Nairobi</option>
					<option value="Nakuru">Nakuru</option>
					<option value="Nandi">Nandi</option>
					<option value="Narok">Narok</option>
					<option value="Nyamira">Nyamira</option>
					<option value="Nyandarua">Nyandarua</option>
					<option value="Nyeri">Nyeri</option>
					<option value="Samburu">Samburu</option>
					<option value="Siaya">Siaya</option>
					<option value="Taita Taveta">Taita Taveta</option>
					<option value="Tana  River">Tana  River</option>
					<option value="Tharaka Nithi">Tharaka Nithi</option>
					<option value="Trans Nzoia">Trans Nzoia</option>
					<option value="Turkana">Turkana</option>
					<option value="Uasin Gishu">Uasin Gishu</option>
					<option value="Vihiga">Vihiga</option>
					<option value="Wajir">Wajir</option>
					<option value="West Pokot">West Pokot</option>
				</select>
				   



   
<p><input name="submit" type="submit" value="Save Changes" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>