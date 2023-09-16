<?php
//including the database connection file
include_once(".\config\config.php");



//$Women = mysqli_query($mysqli, "SELECT city, state, country, addressLine1, addressLine2 FROM offices o join employees e ON (e.officeCode = o.officeCode)");
?>


<!DOCTYPE php>
<php lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    
    <title>Hexashop</title>
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
                            <li class="scroll-to-section"><a href="index.php" class="active">Home</a></li>
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
    
    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <h4 style="box-shadow: 2cm; color:black">We Are Hexashop</h4>
                                <span style="color: black">We have what you need and what you deserve!</span>
                                <div class="main-border-button">
                                    <a href="products.php">Purchase Now!</a>
                                </div>
                            </div>
                            <img src="https://images.pexels.com/photos/9603489/pexels-photo-9603489.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" style="height:34.75em" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Women</h4>
                                                <p>Best Clothes for Women</p>
                                                <div class="main-border-button">
                                                    <a href="women.php" onclick="open_products(this.value)" value="Women">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="https://images.pexels.com/photos/8938735/pexels-photo-8938735.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="height:16.5em">
                                    </div>
                                </div>
                            </div>
                            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
                            <script type="text/javascript">
                                //function open_products(string product_category_clicked){

                                //}

                            </script>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Men</h4>
                                                <p>Best Clothes for Men</p>
                                                <div class="main-border-button">
                                                    <a href="men.php">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="https://images.pexels.com/photos/842811/pexels-photo-842811.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="height:16.5em">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Kids</h4>
                                                <p>Best Clothes for Kids</p>
                                                <div class="main-border-button">
                                                    <a href="kids.php">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="https://images.pexels.com/photos/1912868/pexels-photo-1912868.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="height:16.5em">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Accessories</h4>
                                                <p>Best Trendy Accessories</p>
                                                <div class="main-border-button">
                                                    <a href="accessories.php">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="https://images.pexels.com/photos/322207/pexels-photo-322207.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="height:16.5em">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->
    
    <!-- ***** Men Area Starts ***** -->
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Men's Latest</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                        <div class="owl-men-item owl-carousel">
                        <?php 
                        $sql = "SELECT * FROM products where category = 'Men'";
                        $Men = $conn->query($sql);


                        //$Women = mysqli_query($mysqli, "SELECT * FROM products where category = Women");
                        // $i=0;
                        if ($Men->num_rows > 0) 
                            while($row = $Men->fetch_assoc())  {   
                            echo '  <div class="item">
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
                                </div>';

                }
            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Men Area Ends ***** -->
    
    <!-- ***** Women Area Starts ***** -->
    <section class="section" id="women">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Women's Latest</h2>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="women-item-carousel">
                        <div class="owl-women-item owl-carousel">
                        <?php 
                        $sql1 = "SELECT * FROM products where category = 'women'";
                        $women = $conn->query($sql1);


                        //$Women = mysqli_query($mysqli, "SELECT * FROM products where category = Women");
                        // $i=0;
                        if ($women->num_rows > 0) 
                            while($row1 = $women->fetch_assoc())  {   
                            echo '  <div class="item">
                                        <div class="thumb">
                                            <div class="hover-content">
                                                <ul>
                                                    <li><a href="single-product.php?id=' .$row1["id"] . '"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>';
                                            
                                            //image   
                                            echo "<img src='".$row1["image"]. " 'style = 'height:30em'>";
                                            
                                echo   '</div>
                                            <div class="down-content">
                                                <h4>'
                                                    
                                                        
                                                        .$row1["name"].
                                                    
                                                '</h4>
                                                <span>
                                                    
                                                        
                                                        $ '.$row1["price"].
                                                    
                                                '</span>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>';

                }
            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Women Area Ends ***** -->
    
    <!-- ***** Kids Area Starts ***** -->
    <section class="section" id="kids">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Kid's Latest</h2>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="kid-item-carousel">
                        <div class="owl-kid-item owl-carousel">
                        <?php 
                        $sql2 = "SELECT * FROM products where category = 'kids'";
                        $kids = $conn->query($sql2);


                        //$Women = mysqli_query($mysqli, "SELECT * FROM products where category = Women");
                        // $i=0;
                        if ($kids->num_rows > 0) 
                            while($row2 = $kids->fetch_assoc())  {   
                            echo '  <div class="item">
                                        <div class="thumb">
                                            <div class="hover-content">
                                                <ul>
                                                    <li><a href="single-product.php?id=' .$row2["id"] . '"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>';
                                            
                                            //image   
                                            echo "<img src='".$row2["image"]. " 'style = 'height:30em'>";
                                            
                                echo   '</div>
                                            <div class="down-content">
                                                <h4>'
                                                    
                                                        
                                                        .$row2["name"].
                                                    
                                                '</h4>
                                                <span>
                                                    
                                                        
                                                        $ '.$row2["price"].
                                                    
                                                '</span>
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>';

                }
            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Kids Area Ends ***** -->
    
    
        <!-- ***** Subscribe Area Starts ***** -->
        <div class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-heading">
                        <h2>By Subscribing To Our Newsletter You Can Get 30% Off</h2>
                      
                    </div>
                    <form id="subscribe" action="" onsubmit = "return post();" method="post">
                        <div class="row">
                          <div class="col-lg-5">
                            <fieldset>
                              <input name="name" type="text" id="name" placeholder="Your Name" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-5">
                            <fieldset>
                              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-2">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>
                            </fieldset>
                          </div>
                        </div>
                    </form>
                </div>

                <div id="subscribers">
                 <?php     
                    $sql3 = "select name from subscribers order by subid desc";
                    $subs = $conn->query($sql3); 
                    if ($subs->num_rows > 0) {
                        echo '<div class="row"> <p >Latest Subscribers:</p>';
                        while($row=mysql_fetch_array($subs))
                        {
                        $name=$row['name'];
                        ?> -->
                        
                         <div> 
                         <p class="name">Posted By:<?php echo $name;?></p>
                         </div>
                    
                         <?php
                      }
                     }
                         ?>
                
                    <?php
                    
                
                    ?>
                </div>


                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-6">
                            <ul>
                            
                                <li>Headquarters:<br><a href="https://goo.gl/maps/pM1SmdANV7qvU5Gi7" target="_blank" style="font-size:0.9em">NUST, H-12 Islamabad, Pakistan</a></li>
                                <li>Phone:<br><a href="tel:+0513373209" style="font-size:0.9em">+051-3373209</a></span></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul>
                 
                                <li>Email:<br><a href="mailto:info@hexashop.com"  style="font-size:0.9em">info@hexashop.com</a></span></li>
                                <li><br>Social Media:<br><a href="https://www.facebook.com/nationaluniversityofsciencesandtechnology" target="_blank" style="font-size:0.9em">Facebook</a>, <a href="https://twitter.com/Research_NUST?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank" style="font-size:0.9em">Twitter</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Subscribe Area Ends ***** -->

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
            
            function post()
        {
            var email = document.getElementById("email").value;
            var name = document.getElementById("name").value;
            if(comment && name)
            {
                $.ajax
                ({
                type: 'post',
                url: 'post_comment.php',
                data: 
                {
                    user_email:email,
                    user_name:name
                },
                success: function (response) 
                {
                    document.getElementById("subscribers").innerHTML=response+document.getElementById("subscribers").innerHTML;
                    document.getElementById("name").value="";
                }
                });
            }
            return false;
        }
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