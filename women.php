<?php

include_once(".\config\config.php");
    ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Hexashop Products</title>


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
    
    <?php
    /*
    echo "
    <!-- ***** Preloader Start ***** -->
    <div id='preloader'>
        <div class='jumper'>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    ";
    */
    ?>
    
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
                            <li class="scroll-to-section"><a href="Contact Us.php">Contact</a></li>
                            <li class="scroll-to-section"><a href="search.php">Search</a></li>
                            <li class="scroll-to-section"><a href="signup.php">Sign Up</a></li>
                            <li class="scroll-to-section"><a href="login.php">Log In</a></li>
                            
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

 

    <section class="section" id="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Latest Women Products</h2>
                    </div>
                </div>
            </div>
        </div>


    <?php//this block is displaying data from database ?>
    
        <div class="container">
            <div class="row">

            <?php 
            $sql = "SELECT * FROM products where category = 'Women'";
            $Women = $conn->query($sql);


            //$Women = mysqli_query($mysqli, "SELECT * FROM products where category = Women");
            // $i=0;
            if ($Women->num_rows > 0) 
                while($row = $Women->fetch_assoc())  {   
                echo '<div class="col-lg-4">
                         <div class="item">
                            <div class="thumb">
                                 <div class="hover-content">
                                 <ul>
                                 <li><a href="single-product.php?id=' .$row["id"] . '"><i class="fa fa-eye"></i></a></li>
                             </ul>
                                 </div>';
                                
                                  //image   
                                  echo "<img src='".$row["image"]. " 'style = 'height:30em'>";
                                
                    echo   '</div>
                                <div class="down-content">
                                    <h4>'
                                        
                                            
                                            .$row["name"].
                                         
                                    '</h4>
                                    <span>
                                        
                                            
                                             $ '.$row["price"].
                                        
                                    '</span>
                            <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                         </div>
                     </div>';

                }
                $conn->close();
            ?>

            </div>
        </div>
    </section>
    <!-- ***** Main Banner Area End ***** -->
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

    </script>

    </body>
</html>