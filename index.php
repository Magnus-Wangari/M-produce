<?php

session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Home</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <style>
        #example0 {
            width: 192px;
            height: 260px;
            top:65%;
            left:90%;
            background: url(short.jpg) no-repeat;
            align-content: center;
            position: absolute;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            padding: 70px 30px;
        }

        #example1 {
            width: 1420px;
            height: 140px;
            background: url(gen6.jpg) no-repeat;
            align-content: center;
            position: absolute;
            top: 9%;
            left:-5%;
        }

        #example2 {
            width: 1120px;
            height: 90px;
            top: 39%;
            left: 50%;
            background: url(generatedtext.jpg) no-repeat;
            align-content: center;
            position: absolute;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            padding: 70px 30px;
        }

        /*#example3 {
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
        }*/

        /*#example4 {
            box-shadow: 30px 30px 30px black;
            width: 220px;
            height: 220px;
            background-image: url(per6.jpg);
            background-repeat:no-repeat;
            align-content: center;
            top: 176%;
            left: 50%;
            position: absolute;
            transform: translate(-40%, -40%);
            box-sizing: border-box;
            padding: 70px 30px;
        }*/

        /*#example5 {
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
        }*/

        #example6 {
            width: 1250px;
            height: 620px;
            background: gainsboro url(pr4.jpg) no-repeat;
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
            padding:0 10px;
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
            border: 5px solid white;
            width:500px;
            height:10px;
            backface-visibility: hidden;
            background: gray no-repeat;
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
            filter: alpha(opacity=100);
        }
        h2 {
        }

    </style>
</head>
<body>
<header></header>
<div id=example0></div>

<div id=example1></div>

<div id=example2></div>

<div id=example7>
    <p style=color:green ><b>User Module</b></p>
</div>

<div id=example6>
    <?php
    if (isset($_SESSION['email'])){
        echo '<ul>
                <li>
                    <p><b><a href="includes/logout.inc.php">Logout</a></b></p>
                </li>
                </ul>';
    }else{
        echo '<ul>
        <li>
            <p><b><a href="forgot.php">Forgot Password</a></b>
        </li>
        <li>
            <p><b><a href="signup.php">Sign Up</a></b>
        </li>
        <li>
            <p><b><a href="login.php">Login</a></b></p>
        </li>
    </ul>';
    }
    ?>

</div>

<!--<div id=example3>
    <h4> M-Produce</h4>
</div>

<div id=example4>
    <h4>From Farmers Based In Your Location</h4>
</div>

<div id=example5>
    <h4> Order Your Produce Today</h4>
</div>-->

<div id=example8>
    FARMERS & CONSUMERS
</div>

</body>

</html>
