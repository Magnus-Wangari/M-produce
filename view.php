<?php
require('config.php');

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>View Records</title>
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
    }

    li a:hover {
        color: darkgreen;
    }
table {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

 td,th {
    border: 1px solid #ddd;
    padding: 8px;
    
}

 tr:nth-child(even){background-color: #f2f2f2;}

 tr:hover {background-color: #ddd;}

 th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
    
    .pic{
       
    }
    
    
    
    
</style>

<body>
    <div class="form">

        <ul>
            <li>
                <p><b><a href="logoutad.php">Logout</a></b></p>
            </li>
            
           <!-- <li>
                <p><b><a href="view.php">View Orders</a></b></li>-->
            <li>
                <p><b><a href="view.php">View user Accounts</a></b></li>
            <li>
                <p><b><a href="viewposts.php">View Posts</a></b></li>




        </ul>

        <div class=pic>
        <img src=generatedtext.jpg style=width:300px>
        </div>

        <h1 style="text-align:center;color:forestgreen">USER ACCOUNTS</h1>
        <br>
        <table width="100%" border="1" style="border-collapse:collapse;">
            <thead>
                <tr>
                    <th><strong>No</strong></th>
                    <th><strong>First Name</strong></th>
                    <th><strong>Last Name</strong></th>
                    <th><strong>Date of Birth</strong></th>
                    <th><strong>Gender</strong></th>
                    <th><strong>Email</strong></th>
                    <th><strong>Telephone</strong></th>
                    <th><strong>Category</strong></th>
                    <th><strong>County</strong></th>
                    <th><strong>Password</strong></th>
                </tr>
            </thead>
            <tbody>
                <?php
$count=1;
$sel_query="Select * from useracc";
$result = mysqli_query($db,$sel_query);
while($row =$result-> fetch_assoc()) { ?>
                    <tr>
                        <td align="center">
                            <?php echo $count; ?>
                        </td>
                        <td align="center">
                            <?php echo $row["firstname"]; ?>
                        </td>
                        <td align="center">
                            <?php echo $row["lastname"]; ?>
                        </td>
                        <td align="center">
                            <?php echo $row["dob"]; ?>
                        </td>
                        <td align="center">
                            <?php echo $row["gender"]; ?>
                        </td>
                        <td align="center">
                            <?php echo $row["email"]; ?>
                        </td>
                        <td align="center">
                            <?php echo $row["telephone"]; ?>
                        </td>
                        <td align="center">
                            <?php echo $row["category"]; ?>
                        </td>
                        <td align="center">
                            <?php echo $row["county"]; ?>
                        </td>
                        <td align="center">
                            <?php echo $row["password"]; ?>
                        </td>
                        <td align="center">
                            <a href="adminedit.php?email=<?php echo $row["email"]; ?>"><img src=edit2.jpg style=width:30px;></a>
                        </td>
                        <td align="center">
                            <a href="delete.php?email=<?php echo $row["email"]; ?>"><img src=delete.png style=width:30px;></a>
                        </td>
                    </tr>
                    <?php $count++; } ?>
            </tbody>
        </table>
    </div>
</body>

</html>
