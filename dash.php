<?php

include 'includes/db.inc.php';

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Dashboard - Secured Page</title>


</head>
<style>
    #example0 {

        background: url(image/short.jpg);
        width: 192px;
        height: 260px;
        top:65%;
        left:90%;
        background-repeat: no-repeat;
        align-content: center;
        position: absolute;
        transform: translate(-50%, -50%);
        box-sizing: border-box;
        padding: 70px 30px;
        


    }
    
    #example1 {

        background: url(image/gen6.jpg);
        width: 1420px;
        height: 140px;
        background-repeat: no-repeat;
        align-content: center;
        position: absolute;
        top: 10%;
        left:-5%;


    }

    #example2 {

        width: 1120px;
        height: 90px;
        top: 40%;
        left: 50%;
        background: url(image/generatedtext.jpg);
        background-repeat: no-repeat;
        align-content: center;

        position: absolute;
        transform: translate(-50%, -50%);
        box-sizing: border-box;
        padding: 70px 30px;
        

    }

    #example3 {
        box-shadow: 30px 30px 30px black;
        width: 220px;
        height: 320px;
        background-repeat: no-repeat;
        background-color: honeydew;
        align-content: center;
        top: 176%;
        left: 80%;
        position: absolute;
        transform: translate(-40%, -40%);
        box-sizing: border-box;
        padding: 70px 30px;


    }

    #example4 {
        box-shadow: 30px 30px 30px black;
        width: 220px;
        height: 220px;
        background-image: url(image/per6.jpg);
        background-repeat:no-repeat;
        align-content: center;
        top: 176%;
        left: 50%;
        position: absolute;
        transform: translate(-40%, -40%);
        box-sizing: border-box;
        padding: 70px 30px;
    }

    #example5 {
        box-shadow: 30px 30px 30px black;
        width: 230px;
        height: 320px;
        background-color: honeydew;

        background-repeat: no-repeat;
        align-content: center;
        top: 176%;
        left: 20%;
        position: absolute;
        transform: translate(-40%, -40%);
        box-sizing: border-box;
        padding: 70px 30px;
    }

    #example6 {
        width: 1250px;
        height: 620px;
        background-color: gainsboro;
        background: url(image/pr4.jpg);
        background-repeat: no-repeat;
        position: absolute;
        top: 99%;
        left: 43%;

        transform: translate(-40%, -40%);
        box-sizing: border-box;
        padding: 70px 30px;

    }
   
    body {
        background-color: white;
    }


    ul {
        list-style-type: none;
        padding: 0;
        margin: 0;

        overflow: hidden;




    }
 
    li {

        float: right;


    }

    li a {
        display: block;
        text-decoration: none;
        text-align:right;
        color: white;
        padding:0px 10px;
        font-family: sans-serif;
        font-size: 18px;
        

    }
    li a:hover{
        color: darkgreen;
    }
    #example7{
        color: white;
        top:10%;
        left:15%;
        
    }
    #example8{
        border-style: solid;
        border-color: white;
        border-width:5px;
        width:500px;
        height:10px;
        background-color:gray;
        backface-visibility: hidden;

        background-repeat: no-repeat;
        align-content: center;
        top: 95%;
        left: 21%;
        position: absolute;
        transform: translate(-40%, -40%);
        box-sizing: border-box;
        padding: 70px 50px;
        font-size:22px;
        color:ghostwhite;
        opacity: 0.6;
        
    }
    #example8:hover {
    opacity: 1.0;
    filter: alpha(opacity=100); /* For IE8 and earlier */
}
    h2 {
        
    }

</style>


<header>


</header>

<body>

 <div id=example0>

    </div>
    
    <div id=example1>

    </div>

    <div id=example2>


    </div>
    <div id=example7>
         <p style=color:green ><b>Admin DashBoard</b></p>

    </div>
    <div id=example6>
    
       
        <ul><li>
                <p><b><a href="logout.inc.php">Logout</a></b></p>
            </li>
            <li>
                <p><b><a href="ins.php">Insert New Order</a></b></p>
            </li>
            <li>
                <p><b><a href="view.php">View Orders</a></b></li>
            <li>
                <p><b><a href="view.php">View user Accounts</a></b></li>
            <li>
                <p><b><a href="view.php">View Posts</a></b></li>
            <li>
            

            
        </ul>

    </div> 

  <!--  <div id=example3>
       <h4> M-Produce</h4>
    </div>
    <div id=example4>
        <h4>From Farmers Based In Your Location</h4>
    </div>
    <div id=example5>
        <h4> Order Your Produce Today</h4>
         
    </div>-->
    
    <div id=example8>
        ADMINSTRATOR MODULE
    </div>

</body>

</html>
