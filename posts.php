<?php

session_start();
require("config.php");

?>
<!DOCTYPE html>
<html>
 
<head>
    <title>M-Produce</title>
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
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/posts.css" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="js/jquery-1.11.1.min.js"></script>
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
    <!-- start-smoth-scrolling -->
</head>

<body>
    <!-- header -->
    <div class="agileits_header">
        <div class="container">
            <div class="w3l_offers">
                <p>Get Farm Produce With Convinience.
                    <?php #echo $login_session; 
     
       ?>
                    <!--<a href="products.html">SHOP NOW</a></p>-->
            </div>
            <div class="agile-login">
                <ul>

                    <li>  
                        <p><b><a href="http://www.agricultureauthority.go.ke/category/prices/">News Feeds</a></b></p>
                    </li>
                    <li>
                        <p><b><a href="userprofile.php">View Profile</a></b>
                    </li>
                    <li>
                        <p><b><a href="view.php"></a></b>
                    </li>
                    <li>
                        <p><b><a href="checkout.php">Cart</a></b></p>
                    </li>
                    <li>
                        <p><b><a href="logout.inc.php">Logout</a></b></p>
                    </li>

                        <!-- <p><b><a href="posts.php">View Posts</a></b></li>-->

                </ul>
            </div>
           <!-- <div class="product_list_header">
                <form action="#" method="post" class="last">
                    <input type="hidden" name="cmd" value="_cart">
                    <input type="hidden" name="display" value="1">
                    <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
                </form>
            </div>-->
            <div class="clearfix"> </div>
        </div>
    </div>

    <div class="logo_products">
        <div class="container">
            <div class="w3ls_logo_products_left1">
                <ul class="phone_email">
                    <li><i class="fa fa-phone" aria-hidden="true"></i>Order Online or Contact us:(+254 788 229 272)</li>

                </ul>
            </div>
            <div class="w3ls_logo_products_left">


                  

               

                <h1><a href="index.php"><img src=generatedtext.jpg style=width:100%></a></h1>

            </div>
            <div class="w3l_search">
                <form action="searchpost.php" method="post">
                    <input type="search" name="productname" placeholder="Search for a Product..." required="">
                   

                 <button type="submit" class="btn btn-default search" aria-label="Left Align">
                     <a href="searchpost.php"></a>
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
                    <div class="clearfix"></div>
                </form>
            </div>

            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //header -->
    <!-- navigation -->
    <div class="navigation-agileits">
        <p>Fresh Farm Produce From Farmers Near You </p>
        
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header nav_2">
                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
                </div>
               
            </nav>
        </div>
    </div>
    <!-- //navigation -->
   
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="posts.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Farm Produce</li>
            </ol>
        </div>
    </div>
  
    <!--- groceries --->
    <div class="products">



         <img src="short.jpg" style=width:100px>

         <img src="gen6.jpg" style=width:1000px>
       

        <div class="container">
            
       <!--     <div class="col-md-4 products-left">
                <div class="categories">
                    <h2>Categories</h2>
                    <ul class="cate">
                        <li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Fruits And Vegetables</a></li>
                        <ul>
                            <li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Cuts & Sprouts</a></li>
                            <li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Flowers</a></li>
                            <li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Fresh Herbs & Seasonings</a></li>
                            <li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Fresh Vegetables</a> </li>
                            <li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>International Vegetables</a> </li>
                            <li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Organic Fruits & Vegetables</a></li>
                        </ul>
                        <li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Grocery & Staples</a></li>
                        <ul>
                            <li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Dals & Pulses</a> </li>
                            <li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Dry Fruits</a> </li>
                            <li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Edible Oils & Ghee</a> </li>
                            <li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Flours & Sooji</a> </li>
                            <li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Masalas & Spices</a> </li>
                            <li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Organic Staples</a> </li>
                            <li><a href="products.html"><i class="fa fa-arrow-right" aria-hidden="true"></i>Rice & Rice Products</a> </li>
                            
                        </ul>
                   
                    </ul>
                </div>
            </div>-->
            <div class="col-md-8 products-right">
                
                </div>


                <div class="agile_top_brands_grids">
                     <?php
                            $sel_query="Select * from post";
                            $result = mysqli_query($db,$sel_query);
                            while($row =$result-> fetch_assoc()) { ?>

                    <div class="col-md-4 top_brand_left">
                        <div class="hover14 column">
                           

                                <div class="agile_top_brand_left_grid">
                                    <div class="agile_top_brand_left_grid_pos">
                                        
                                    </div>
                                    <div class="agile_top_brand_left_grid1">
                                        <figure>
                                            <div class="snipcart-item block">
                                                <div class="snipcart-thumb">
                                                    <img src="<?php echo $row["image"];?>" alt="" width="280" height="180" />
                                                   <b> <p style=color:forestgreen;font-size:19px>
                                                        <?php echo $row["productname"];?>
                                                    </p></b>
                                                    <h4>
                                                       Ksh<?php echo $row["price"]; ?> per Kg
                                                        <h4>
                                                            <?php echo $row["quantity"]; ?>Kg(s)
                                                        </h4>
                                                        <h5>
                                                            <?php echo $row["county"]; ?>
                                                        </h5>
                                                        <span></span>
                                                    </h4>
                                                </div>
                                                <div class="snipcart-details top_brand_home_details">
                                                    <form action="addtocart.php?id=<?php echo $row["postid"];?>" method="post">
                                                        <fieldset>
                                                            <input type="hidden" name="cmd" value="_cart">
                                                            <input type="hidden" name="add" value="1">
                                                            <input type="hidden" name="business" value=" ">
                                                            <input type="hidden" name="item_name" value="<?php echo $row["productname"];?>">
                                                            <input type="hidden" name="amount" value="<?php echo $row["price"]; ?>">
                                                            <input type="hidden" name="currency_code" value="KES">
                                                            <input type="hidden" name="return" value=" ">
                                                            <input type="hidden" name="cancel_return" value=" ">
                                                            <input type="submit" name="submit" value="Add to Cart" class="button">
                                                        </fieldset>
                                                    </form>
                                                </div>
                                                
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                               
                        </div>
                    </div>
                     <?php
                            }
                             ?>
                    
                 
                    <div class="clearfix"> </div>
                </div>
              <!--  <nav class="numbering">
                    <ul class="pagination paging">
                        <li>
                            <a href="#" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
                        </li>
                        <li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
							</a>
                        </li>
                    </ul>
                </nav>-->
            </div>
            <div class="clearfix"> </div>
        </div>
    
    <!--- groceries --->
    <!-- //footer -->
    <div class="footer">
        <div class="container">
            <div class="w3_footer_grids">
                <div class="col-md-3 w3_footer_grid">
                    <h3>Contact</h3>

                    <ul class="address">
                        <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>59857,00200 <span>Nairobi.</span></li>
                        <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:mproduceproject@gmail.com">mproduceproject@gmail.com</a></li>
                        <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+254 788 229 772</li>
                    </ul>
                </div>
                <div class="col-md-3 w3_footer_grid">
                    <h3>Information</h3>
                    <P>M-Produce connects local farmers<br/> to consumers around them.</P>




                   
                </div>
                <div class="col-md-3 w3_footer_grid">
                    <h3>Category</h3>

                </div>
                
                <div class="col-md-3 w3_footer_grid">
                    <h3>Profile</h3>
                    <ul class="info">
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="posts.php">Store</a></li>
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="checkout.php">My Cart</a></li>
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="login.php">Login</a></li>
                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="signup.php">Create Account</a></li>
                    </ul>


                </div>
                <div class="clearfix"> </div>
            </div>
        </div>

        <div class="footer-copy">

            <div class="container">
                <p>© M-Produce</p>
            </div>
        </div>

    </div>
    <div class="footer-botm">
        <div class="container">
            <div class="w3layouts-foot">
                <ul>
                    <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="payment-w3ls">
               <!-- <img src="images/card.png" alt=" " class="img-responsive">-->
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //footer -->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- top-header and slider -->
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
            	var defaults = {
            	containerID: 'toTop', // fading element id
            	containerHoverID: 'toTopHover', // fading element hover id
            	scrollSpeed: 1200,
            	easingType: 'linear' 
            	};
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });

    </script>
    <!-- //here ends scrolling icon -->
    <script src="js/minicart.min.js"></script>
    <script>
        // Mini Cart
        paypal.minicart.render({
            action: '#'
        });

        if (!~window.location.search.indexOf('reset=true')) {
        } else {
            paypal.minicart.reset();
        }

    </script>
    <!-- main slider-banner -->
    <script src="js/skdslider.min.js"></script>
    <link href="css/skdslider.css" rel="stylesheet">
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('#demo1').skdslider({
                'delay': 5000,
                'animationSpeed': 2000,
                'showNextPrev': true,
                'showPlayButton': true,
                'autoSlide': true,
                'animationType': 'fading'
            });

            jQuery('#responsive').change(function() {
                $('#responsive_wrapper').width(jQuery(this).val());
            });

        });

    </script>
   
    <!-- //main slider-banner -->

</body>

</html>
