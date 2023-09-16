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
    
    <title>Checkout</title>
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
                        <a href="index.php" class="logo" style="margin-top:1%; ">
                            <img src="assets/images/logo.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.php">Log Out</a></li>
                            
                        </ul>        
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    
    
    <br><br><br><br><br><br>
    <h2 style="text-align:center">Check Out</h2>
      
    <div class="subscribe">
        <div class="row">
            <div class="container" style="width:100%">
            <form id="signup" onsubmit="return validateForm()" method="post">
            <h4 style=" margin-top:-2%; margin-left:3.8%">Shipping Address<sup style="color:red">*</sup></h4><br/>
                        <div class="row">
                            <fieldset style="margin-left:5%; margin-top:-0.8%; width: 40%;">
                              <input name="signupusername" type="text" id="signupusername"  required="required">
                              <div id="usernamemsg" style="margin:1%; margin-left: 0; color:red"> </div>
                            </fieldset>
                        </div>
            <h4 style=" margin-top:1%; margin-left:3.8%">Contact Number<sup style="color:red">*</sup></h4><br/>
                        <div class="row">
                            <fieldset style="margin-left:5%; margin-top:-0.8%; width: 40%;">
                              <input name="signupemail" type="email" id="email" pattern="[^ @]*@[^ @]*" required="required">
                              <div id="emailmsg" style="margin:1%; margin-left: 0; color:red"> </div>
                            </fieldset>
                        </div>
            <h4 style=" margin-top:1%; margin-left:3.8%">Card Number<sup style="color:red">*</sup></h4><br/><br/><br/>
            <div class="row">
                <fieldset style="margin-left:5%; margin-top:-5%; width: 40%;">
                    <input name="signupname" type="text" id="fullname"  required="required">
                    <div id="namemsg" style="margin:1%; margin-left: 0; color:red"> </div>
                </fieldset>
            
            </div>
            <h4 style=" margin-top:1%; margin-left:3.8%">Expiry Date<sup style="color:red">*</sup></h4><br/>
                        <div class="row">
                            <fieldset style="margin-left:5%; margin-top:-0.8%; width: 40%;">
                            <input type="month" id="start" name="start" min="2022-05" value="2026-05">
                              <div id="passwordmsg" style="margin:1%; margin-left: 0; color:red"> </div>
                            </fieldset>
                        </div>
            <h4 style=" margin-top:1%; margin-left:3.8%">CVV Number<sup style="color:red">*</sup></h4><br/>
                        <div class="row">
                            <fieldset style="margin-left:5%; margin-top:-0.8%; width: 40%;">
                              <input name="signuppassword2" type="password" id="signuppassword2"  required="required">
                              <div id="password2msg" style="margin:1%; margin-left: 0; color:red"> </div>
                            </fieldset>
                        </div>
                        <div class="row">
                            <fieldset style="margin-left: 5%; margin-top:2%;">
                                <button type="submit" name="pay" class="main-dark-button" style="width: 200%; text-align: middle">Pay</button>
                            </fieldset>
                        </div>
                        <br/><br/>
                    </form>
            </div>
        </div>
    </div>
         
    </div>
    </form>
    <br/>
    
        
        
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