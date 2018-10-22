<?php

include("config.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Dashboard - Secured Page</title>


</head>
<style>
    
    
    .open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;  
   width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
    
    

    
    
    
    #example0 {

        background: url(short.jpg);
        width: 192px;
        height: 260px;
        top: 65%;
        left: 90%;
        background-repeat: no-repeat;
        align-content: center;
        position: absolute;
        transform: translate(-50%, -50%);
        box-sizing: border-box;
        padding: 70px 30px;



    }

    #example1 {

        background: url(gen3.jpg);
        width: 1420px;
        height: 140px;
        background-repeat: no-repeat;
        align-content: center;
        position: absolute;
        top: 10%;
        left: -5%;


    }

    #example2 {

        width: 1120px;
        height: 90px;
        top: 40%;
        left: 50%;
        background: url(generatedtext.jpg);
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
        background-image: url(pr9.jpg);
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
        border-width: 5px;
        color: darkgreen;


    }

    #example3:hover {
        opacity: 1.0;
        filter: alpha(opacity=100);
        /* For IE8 and earlier */
    }

    #example4 {
        box-shadow: 30px 30px 30px black;
        width: 320px;
        height: 320px;
        background-image: url(p11.jpg);
        background-repeat: no-repeat;
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
        border-width: 5px;
        color: darkgreen;

    }

    #example4:hover {
        opacity: 1.0;
        filter: alpha(opacity=100);
        /* For IE8 and earlier */
    }


    #example6 {

        width: 1250px;
        height: 620px;
        background-color: gainsboro;
        background: url(d2.png);
        background-repeat: no-repeat;
        position: absolute;
        top: 99%;
        left: 41%;

        transform: translate(-40%, -40%);
        box-sizing: border-box;
        padding: 70px 30px;

    }

    #example6:hover {
        opacity: 1.0;
        filter: alpha(opacity=100);
        /* For IE8 and earlier */
    }

    #example5 {
        box-shadow: 30px 30px 30px black;
        width: 380px;
        height: 200px;
        background-color: honeydew;
        background-image: url(pr7.jpg);
        background-repeat: no-repeat;
        align-content: center;
        top: 138%;
        left: 20%;
        position: absolute;
        transform: translate(-40%, -40%);
        box-sizing: border-box;
        padding: 70px 30px;
        opacity: 0.6;
        border-style: solid;
        border-color: white;
        border-width: 5px;
        color: darkgreen;
    }

    #example5:hover {
        opacity: 1.0;
        filter: alpha(opacity=100);
        /* For IE8 and earlier */
    }

    #example9 {
        box-shadow: 30px 30px 30px black;
        width: 380px;
        height: 200px;
        background-image: url(pr3.jpg);
        background-repeat: no-repeat;
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
        border-width: 5px;
    }

    #example9:hover {
        opacity: 1.0;
        filter: alpha(opacity=100);
        /* For IE8 and earlier */
    }

    #example10 {
        box-shadow: 30px 30px 30px black;
        width: 380px;
        height: 200px;
        background-image: url(per6.jpg);
        background-repeat: no-repeat;
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
        border-width: 5px;
    }

    #example10:hover {
        opacity: 1.0;
        filter: alpha(opacity=100);
        /* For IE8 and earlier */
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

        float: left;


    }

    li a {
        display: block;
        text-decoration: none;
        text-align: left;
        color: dimgrey;
        padding: 0px 10px;
        font-family: sans-serif;
        font-size: 25px;


    }

    li a:hover {
        color: darkgreen;
    }

    #example7 {
        color: white;
        top: 10%;
        left: 15%;

    }

    h4 {}

    #example8 {
        border-style: solid;
        border-color: white;
        border-width: 5px;
        width: 300px;
        height: 0px;
        background-color: transparent;
        backface-visibility: hidden;
        background-repeat: no-repeat;
        align-content: left;
        top: 100%;
        left: 21%;
        position: absolute;
        transform: translate(-40%, -40%);
        box-sizing: border-box;
        padding: 100px 50px;
        font-size: 22px;
        color: white;
        opacity: 0.9;


    }

    #example8:hover {
        opacity: 1.0;
        filter: alpha(opacity=100);
        /* For IE8 and earlier */
    }

    #example11 {

        width: 1290px;
        height: 200px;
        background-image: url(ad.jpg);
        background-repeat: no-repeat;
        align-content: center;
        top: 172%;
        left: 41%;
        position: absolute;
        transform: translate(-40%, -40%);
        box-sizing: border-box;
        padding: 70px 30px;
        opacity: 0.9;
        border-style: solid;
        border-color: transparent;
        border-width: 5px;

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
        <p style=color:green><b>Join Us Today</b></p>

    </div>
    <div id=example6>




        <ul>
            <li>
                <p><b><a href="login.php" onclick="openForm()">Login</a></b></p>
            </li>
            <li>
                <p><b><a href="signup.html">Sign-Up</a></b></p>
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

            <div class="form-popup" id="myForm">
                <form action="/action_page.php" class="form-container">
                    <h1>Login</h1>

                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <button type="submit" class="btn">Login</button>
                    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                </form>
            </div>




        </ul>

    </div>

    <div id=example3>
        <h3> Fresh Produce From Farmers Near You</h3>
    </div>
    <div id=example4>
        <h3>M-Produce</h3>
    </div>
    <div id=example5>
        <h3> Order Your Produce Today</h3>

    </div>

    <div id=example8>
        Create Your Account Today And Purchase or Sell Farm Produce To People Near You
    </div>
    <div id=example9>

    </div>
    <div id=example10>

    </div>
    <div id=example11>
        <footer style="text-align: center;background-color:transparent;color:white">
            <p class="pull-right"><a href="#">Back to top</a></p>
            <p><b>&copy;M-Produce &middot;</b> </p>
        </footer>
    </div>

    <!--javascript for pop up screen-->
    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }

    </script>
</body>

</html>
