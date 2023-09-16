<?php
//including the database connection file
include_once(".\config\config.php");
?>


<!DOCTYPE php>
<php lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    
    <title>Zartab's Cart </title>
    <link rel="icon" type="image/x-icon" href="assets/images/logo2.png">
    
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    
    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">
    
    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    
    <link rel="stylesheet" href="assets/css/lightbox.css">
</head>

<style>
    html,body {
    width: 100%;
    overflow-x: hidden;
    }
    </style>

<body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky" style="width:100%">
        <div class="container">
            <div class="row" style="width:100%">
                <div class="col-12">
                    <nav class="main-nav" style="width:100%">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo" style="margin-top:1.6%; ">
                            <img src="assets/images/logo.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.php" >Home</a></li>
                            <li class="submenu">
                                <a href="products.php">Shop</a>
                                <ul>
                                    <li><a href="men.php">Men</a></li>
                                    <li><a href="women.php">Women</a></li>
                                    <li><a href="kids.php">Kids</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="about.php">About Us</a></li>
                            <li class="scroll-to-section"><a href="contact.php">Contact</a></li>
                            <li class="scroll-to-section"><a href="search.php">Search</a></li>
                            <li class="scroll-to-section"><a href="cart.php" class="active">Zartab's Cart</a></li>
                            <li class="scroll-to-section"><a href="login.php">Log Out</a></li>
                            
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    
    
    <!-- ***** Men Area Starts ***** -->
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Zartab's Items</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                        <div class="owl-men-item owl-carousel">
                            
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="product.id=2.php"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="https://images.pexels.com/photos/1766807/pexels-photo-1766807.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"  style="height:30em"  alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Air Yellow Puffer</h4>
                                    <span>$130.00</span>
                                    <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="product.id=7.php"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="https://images.pexels.com/photos/189857/pexels-photo-189857.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"  style="height:30em"  alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Blue-White Plaid Dress</h4>
                                    <span>$80.00</span>
                                    <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="product.id=3.php"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="https://images.pexels.com/photos/227294/pexels-photo-227294.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"  style="height:30em"  alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Master Scarf</h4>
                                    <span>$75.00</span>
                                    <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Men Area Ends ***** -->
    <div class="total">
                    
    <h2 style="margin-left:41%"> Total: $285.00 </h2><br/>
    <div class="main-border-button" style="margin-right:45%; font-weight:bolder;"><a href="checkout.php">Checkout</a></div>
    
    </div>

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <h4>Contact Hexashop</h4>
                    <ul>
                        <li><a href="https://goo.gl/maps/pM1SmdANV7qvU5Gi7" target="_blank" style="font-size:0.9em">NUST, H-12 Islamabad, Pakistan</a></li>
                        <li><a href="mailto:info@hexashop.com" style="font-size:0.9em">info@hexashop.com</a></li>
                        <li><a href="tel:+0513373209" style="font-size:0.9em">+051-3373209</a></li> 
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Shopping &amp; Categories</h4>
                    <ul>
                        <li><a href="men.php" style="font-size:0.9em">Men’s Shopping</a></li>
                        <li><a href="women.php" style="font-size:0.9em">Women’s Shopping</a></li>
                        <li><a href="kids.php" style="font-size:0.9em">Kid's Shopping</a></li>
                        <li><a href="accessories.php" style="font-size:0.9em">Accessories Shopping</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="index.php" style="font-size:0.9em">Home</a></li>
                        <li><a href="about.php" style="font-size:0.9em">About Us</a></li>
                        <li><a href="contact.php" style="font-size:0.9em">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2022 HexaShop Co., Ltd. All Rights Reserved by Arqam and Zartab.                    
                        <ul>
                            <li><a href="https://www.facebook.com/nationaluniversityofsciencesandtechnology" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/Research_NUST?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
        
        
        <!-- jQuery -->
        <script src="assets/js/jquery-2.1.0.min.js"></script>
        
        <!-- Bootstrap -->
        <script src="assets/js/popper.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        
        <!-- Plugins -->
        <script src="assets/js/owl-carousel.js"></script>
        <script src="assets/js/accordions.js"></script>
        <script src="assets/js/datepicker.js"></script>
        <script src="assets/js/scrollreveal.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/imgfix.min.js"></script> 
        <script src="assets/js/slick.js"></script> 
        <script src="assets/js/lightbox.js"></script> 
        <script src="assets/js/isotope.js"></script> 
        
        <!-- Global Init -->
        <script src="assets/js/custom.js"></script>
        
        <script>
            
            $(function() {
                var selectedClass = "";
                $("p").click(function(){
                    selectedClass = $(this).attr("data-rel");
                    $("#portfolio").fadeTo(50, 0.1);
                    $("#portfolio div").not("."+selectedClass).fadeOut();
                    setTimeout(function() {
                        $("."+selectedClass).fadeIn();
                        $("#portfolio").fadeTo(50, 1);
                    }, 500);
                    
                });
            });
            
            $('.switch').click(()=>{
    $([".light [class*='-light']", ".dark [class*='-dark']"]).each((i,ele)=>{
        $(ele).toggleClass('bg-light bg-dark')
        $(ele).toggleClass('text-light text-dark')
        $(ele).toggleClass('navbar-light navbar-dark')
    })
    // toggle body class selector
    $('body').toggleClass('light dark')
})


function darkMode() {
   var element = document.body;
   element.classList.toggle("darkmode");  
}
        </script>
        
    </body>
    </php>