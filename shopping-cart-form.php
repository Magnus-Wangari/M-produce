<?php

require("config.php");

session_start();

$email = $_SESSION['email'];
$first = $_SESSION['first'];
$last = $_SESSION['last'];

$ref = rand(10000, 1000000);

$_SESSION['total']= $_POST['total'];
$total = $_SESSION['total'];

?>
<!DOCTYPE html>
<html>

<head>
    <title>Check out</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/posts.css" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js -->
    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/minicart.min.js"></script>
    <!-- //js -->
    <link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });

    </script>
    <!-- start-smooth-scrolling -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-63611585-1', 'auto');
        ga('send', 'pageview');
    </script>
</head>
<body>
<div class="navigation-agileits"></div>

<!-- //navigation -->

<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
            <li class="active">Checkout</li>
        </ol>
    </div>
</div>

<div class="products">
    <!--<img src="short.jpg" style=width:100px>
    <img src="gen6.jpg" style=width:1000px>-->
    <div class="main-container">
        <div class="main-wrapper">
        <h2>CHECKOUT</h2>
        <form class="signup-form" action="pesapal-iframe.php" method="post">
            <label>Amount (in Kshs):</label><br>
            <input type="text" name="amount" value="<?php echo $total ?>"  />
            <label>Type:</label><br>
            <input type="text" name="type" value="MERCHANT" readonly="readonly" />
            <label>Description:</label><br>
            <input type="text" name="description" value="Produce" />
            <label>Reference:</label><br>
            <input type="text" name="reference" value="<?php echo $ref ?>" />
            <label>First Name:</label><br>
            <input type="text" name="first_name" value="<?php echo $_SESSION['first']; ?>" />
            <label>Last Name:</label><br>
            <input type="text" name="last_name" value="<?php echo $_SESSION['last']; ?>" />
            <label>Email:</label><br>
            <input type="email" name="email" value="<?php echo $email; ?>" />
            <button type="submit"  name="submit">Make Payment</button>
        </form>
            <div class="checkout-right-basket">
                <a href="posts.php"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Continue Shopping</a>
            </div>
    </div>
    </div>
    <div class="clearfix"> </div>
</div>
</body>
<script src="js/minicart.min.js"></script>
</html>