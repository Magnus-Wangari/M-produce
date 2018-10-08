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
        width: 320px;
        height: 320px;
        background-image: url(image/pr9.jpg);
        background-repeat: no-repeat;
        background-color: honeydew;
        align-content: center;
        top: 81%;
        left: 80%;
        position: absolute;
        transform: translate(-40%, -40%);
        box-sizing: border-box;
        padding: 70px 30px;
        opacity: 0.6;
         border-style: solid;
        border-color: white;
        border-width:5px;


    }
     #example3:hover {
    opacity: 1.0;
    filter: alpha(opacity=100); /* For IE8 and earlier */
}

    #example4 {
        box-shadow: 30px 30px 30px black;
        width: 320px;
        height: 320px;
        background-image: url(image/p11.jpg);
        background-repeat:no-repeat;
        align-content: center;
        top: 81%;
        left: 55%;
        position: absolute;
        transform: translate(-40%, -40%);
        box-sizing: border-box;
        padding: 70px 30px;
        opacity: 0.6;
         border-style: solid;
        border-color: white;
        border-width:5px;
        
    }
     #example4:hover {
    opacity: 1.0;
    filter: alpha(opacity=100); /* For IE8 and earlier */
}
    

    #example6 {

        width: 1250px;
        height: 620px;
        background-color: gainsboro;
        background: url(image/pe.jpg);
        background-repeat: no-repeat;
        position: absolute;
        top: 99%;
        left: 43%;

        transform: translate(-40%, -40%);
        box-sizing: border-box;
        padding: 70px 30px;

    }
     #example6:hover {
    opacity: 1.0;
    filter: alpha(opacity=100); /* For IE8 and earlier */
}
   
    #example5 {
        box-shadow: 30px 30px 30px black;
        width: 380px;
        height:200px;
        background-color: honeydew;
        background-image: url(image/pr7.jpg);
        background-repeat: no-repeat;
        align-content: center;
        top: 138%;
        left: 20%;
        position: absolute;
        transform: translate(-40%, -40%);
        box-sizing: border-box;
        padding: 70px 30px;
        opacity:0.6;
         border-style: solid;
        border-color: white;
        border-width:5px;
    }
     #example5:hover {
    opacity: 1.0;
    filter: alpha(opacity=100); /* For IE8 and earlier */
}
    #example9 {
        box-shadow: 30px 30px 30px black;
        width: 380px;
        height: 200px;
        background-image: url(image/pr3.jpg);
        background-repeat:no-repeat;
        align-content: center;
        top: 138%;
        left: 50%;
        position: absolute;
        transform: translate(-40%, -40%);
        box-sizing: border-box;
        padding: 70px 30px;
        opacity: 0.6;
         border-style: solid;
        border-color: white;
        border-width:5px;
    }
     #example9:hover {
    opacity: 1.0;
    filter: alpha(opacity=100); /* For IE8 and earlier */
}
     #example10 {
        box-shadow: 30px 30px 30px black;
        width: 380px;
        height: 200px;
        background-image: url(image/per6.jpg);
        background-repeat:no-repeat;
        align-content: center;
        top: 138%;
        left: 80%;
        position: absolute;
        transform: translate(-40%, -40%);
        box-sizing: border-box;
        padding: 70px 30px;
        opacity: 0.6;
         border-style: solid;
        border-color: white;
        border-width:5px;
    }
     #example10:hover {
    opacity: 1.0;
    filter: alpha(opacity=100); /* For IE8 and earlier */
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

        float:left;


    }

    li a {
        display: block;
        text-decoration: none;
        text-align:left;
        color: dimgrey;
        padding:0px 10px;
        font-family: sans-serif;
        font-size: 25px;
        

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
        width:300px;
        height:0px;
        background-color:transparent;
        backface-visibility: hidden;
        background-repeat: no-repeat;
        align-content:left;
        top: 95%;
        left: 21%;
        position: absolute;
        transform: translate(-40%, -40%);
        box-sizing: border-box;
        padding: 100px 50px;
        font-size:22px;
        color:white;
        opacity: 0.9;
         
        
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
         <p style=color:green ><b>Join Us Today</b></p>

    </div>
   <div id=example6>
    
        
        <ul><li>
                <p><b><a href="includes/login.inc.php">Login</a></b></p>
            </li>
            <li>
                <p><b><a href="signup.php">Sign-Up</a></b></p>
            </li>
            <!--
            <li>
                <p><b><a href="view.php">View Orders</a></b></li>
            <li>
                <p><b><a href="view.php">View user Accounts</a></b></li>
            <li>
                <p><b><a href="view.php">View Posts</a></b></li>
            <li>
-->
            

            
        </ul>

    </div>

    <div id=example3>
       <h4> M-Produce</h4>
    </div>
    <div id=example4>
        <h4>From Farmers Based In Your Location</h4>
    </div>
    <div id=example5>
        <h4> Order Your Produce Today</h4>
         
    </div>
    
    <div id=example8>
        Create Your Account Today And Purchase or Sell Farm Produce To People Near You
    </div>
    <div id=example9>
        
    </div>
    <div id=example10>
       
    </div>

</body>

</html>
