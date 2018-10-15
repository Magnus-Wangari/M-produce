  <html>

<head>

    <title>

    </title>
</head>
<style>
    @import url('https://fonts.googleis.com/css?family=Pacifico|Rock+Salt');
    html,
    body,
    section {
        
    }

    table {
        border-collapse: collapse;
        width: 100%;
        height: 60%;
        text-align: left;

    }

    td {
        padding: 8px;
        font-family: sans-serif;
        font-size: 18px;
        color: black;
    }

    tr:nth-child(even) {
        background-color:palegreen;
        opacity:0.5;

    }
     tr:hover {background-color:lightgreen;}

    body {}

    h2 {
        text-align: center;
        padding: 5px;
        color: black;
        font-family:sans-serif;
    }


    img {
        width: 40%;
        border-radius: 80px;
        padding: 0px;
        align-self: center;
        justify-content: center;

    }

    table #avatar {
        left: 50px;
    }

    ul {
        list-style-type: none;
        padding: 10px;
        margin: 0;
        background-color:green;
        border-radius: 10px;

        overflow: hidden;




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

    li a:hover {
        color: darkgreen;
    }

    p {
        text-align: center;
        font-size: 20px;
        color:limegreen;
    }

    button {  
        text-align:center;
        background-color:green;

        width: 15%;
        padding: 5px 5px;
        margin: 0px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        border-radius: 30px;
        color: white;
       float:right;
        font-size: 15px;

    }
    button a{
        list-style-type: none;
        text-align:left;
        text-decoration: none;
        color: white;
    }
    button a:hover{
        color:darkgreen;
    }
    
    
</style>

<body>
<div class="short">
    
    </div>
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
            <p><b><a href="view.php">Notifications</a></b></li>
        <li>
            <p><b><a href="posts.php">View Posts</a></b></li>




    </ul>


    <table>

        <?php
//check for a form submission
require('config.php');
#include('session.php');
  
if(isset($_POST['email'])){
    
$count=1;
//$sel_query = "SELECT * from useracc where 'email'='".$_SESSION['email']."'"or die(mysql_error());
$sel_query="Select firstname, lastname, dob, gender, email, telephone, category, county from useracc";
$result = mysqli_query($db,$sel_query);
    
while($row =$result-> fetch_assoc()) { ?>


            <h2>
                <?php echo $row["firstname"]; ?>
               <?php echo $row["lastname"]; ?>'s profile</h2><br/> 
            <p>
                Category:<?php echo $row["category"];?>
            </p>
        
            <button> <a href="edit.php?email=<?php echo $row["email"]; ?>">Edit Profile</a></button>
        
            <button> <a href="uploadpost.php?email=<?php echo $row["email"]; ?>">Post Produce</a></button>

            <div id=avatar>
                <img src="generatedtext.jpg">

            </div>

            <hr>

            <tr>
                <td> First Name:</td>
                <td>
                    <?php echo $row["firstname"]; ?>
                </td>
            </tr>
            <tr>
                <td> Last Name:</td>
                <td>
                    <?php echo $row["lastname"]; ?>
                </td>
            </tr>
            <tr>
                <td> Date of Birth:</td>
                <td>
                    <?php echo $row["dob"]; ?>
                </td>
            </tr>
            <tr>
                <td> Gender:</td>
                <td>
                    <?php echo $row["gender"]; ?>
                </td>
            </tr>
            <tr>
                <td> Email:</td>
                <td>
                    <?php echo $row["email"]; ?>
                </td>
            </tr>
            <tr>
                <td>Telephone:</td>
                <td>
                    <?php echo $row["telephone"]; ?>
                </td>
            </tr>
            <tr>
                <td>Category:</td>
                <td>
                    <?php echo $row["category"]; ?>
                </td>
            </tr>
            <tr>
                <td>County:</td>
                <td>
                    <?php echo $row["county"]; ?>
                </td>
            </tr>

    </table>


    <?php
if($sel_query!=$row["email"]){
        die("That username could not be found");
    }
       ?>
        <?php
    }
    if($email!=$email){
    die("There has been a fatal error.Please try again");
}

        
        
?>
            <?php $count++; ?>
            <?php
}else die("You need to enter a username");
                ?>


</body>

</html>
