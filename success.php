<?php
include 'session.php';


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
            <li class="active">Payment Successful</li>
        </ol>
    </div>
</div>
<div id="Box">
    <p>Detail Message</p>
    <div class="alert alert-success">
        <strong>PAYMENT SUCCESSFUL</strong>
    </div>
    <?php
        $sql= "SELECT * FROM orders where email = '$user_check'";
        $result = mysqli_query($db, $sql);

        if($row = mysqli_fetch_assoc($result)){
            ?>
            <dl class="dl-horizontal">
                <dt>Order&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ID:</dt>
                <dd><?php echo $row['orderid'];?></dd>
                <dt>Order Name:</dt>
                <dd><?php echo $row['description']; ?></dd>
                <dt>Order&nbsp;&nbsp; Date:</dt>
                <dd><?php echo $row['Time']; ?></dd>
            </dl>
    <?php
        }
    ?>

</div>
<div class="checkout-right-basket">
    <a href="posts.php"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Continue Shopping</a>
</div>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
    #Box {
        border: 1px solid limegreen;
        border-radius: 30px;
        width: 600px;
        margin: 0 auto;
        padding: 30px;
    }

    p {
        font-family: sans-serif;
        font-size: 50px;
        color: #ccc;
        line-height: 50px;
        text-align: center;
    }
    strong{
        text-align: center;
        font-size: 16px;
    }

    dl dt {
        margin-left: 0;
    }
</style>