<html>

<head>

    <title>

    </title>
</head>
<style>
    @import url('https://fonts.googleis.com/css?family=Pacifico|Rock+Salt');
    html,
    body,
    section {}

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
        background-color:lightgreen;
        opacity:0.5;

    }

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
        padding: 0;
        margin: 0;
        background-color:green;
        border-radius: 50px;

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

        width: 12%;
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
            <p><b><a href="includes/logout.inc.php">Logout</a></b></p>
        </li>
        <li>
            <p><b><a href="http://www.agricultureauthority.go.ke/category/prices/">News Feeds</a></b></p>
        </li>
        <li>
            <p><b><a href="userprofile.php">View Profile</a></b></li>
        <li>
            <p><b><a href="view.php">Notifications</a></b></li>
        <li>
            <p><b><a href="view.php">View Posts</a></b></li>




    </ul>


    <table>

        <?php
//check for a form submission
 include 'includes/db.inc.php';
   session_start();
if(isset($_GET['email'])){
    
$count=1;
$sel_query="SELECT * FROM users";
$result = mysqli_query($conn,$sel_query);
    
while($row =$result-> fetch_assoc()) { ?>


            <h2>
                <?php echo $row["firstname"]; ?>
                <?php echo $row["lastname"]; ?>'s profile</h2><br/>
            <p>
                <?php echo $row["category"];?>
            </p>
        
            <button> <a href="edit.php?firstname=<?php echo $row["firstname"]; ?>">Edit Profile</a></button>
        
            <button> <a href="edit.php?firstname=<?php echo $row["firstname"]; ?>">Post Produce</a></button>

            <div id=avatar>
                <img src="image/generatedtext.jpg">

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
