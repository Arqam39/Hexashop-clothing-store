<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Additional CSS Files -->
    <title>Hexashop Log In</title>
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
    
   
    <!-- ** Preloader End ** -->
    
        <!-- ***** Header Area Start ***** -->
        <header class="header-area header-sticky" style="width:100%">
        <div class="container">
            <div class="row" style="width:100%">
                <div class="col-12">
                    <nav class="main-nav" style="width:100%">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo" style="margin-top:0em; ">
                            <img src="assets/images/logo.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.php">Home</a></li>
                            <li class="submenu">
                                <a href="products.php">Shop</a>
                                <ul>
                                    <li><a href="men.php">Men</a></li>
                                    <li><a href="women.php">Women</a></li>
                                    <li><a href="kids.php">Kids</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="about.php" >About Us</a></li>
                            <li class="scroll-to-section"><a href="contact.php">Contact</a></li>
                            <li class="scroll-to-section"><a href="search.php">Search</a></li>
                            <li class="scroll-to-section"><a href="signup.php" >Sign Up</a></li>
                            <li class="scroll-to-section"><a href="login.php" class="active">Log In</a></li>
                            
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

    <?php
    session_start();
    include_once(".\config\config.php");

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}
 
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["loginusername"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["loginusername"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["loginpassword"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["loginpassword"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT userid, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["userid"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: index.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($conn);
}
    ?>

    <br><br><br><br><br><br>
    <h2 style="text-align:center">Log In</h2>
      
    <div class="subscribe">
        <div class="row">
            <div class="container" style="width:100%">
            <form id="login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            
            <h4 style=" margin-top:-5%; margin-left:3.8%">Username<sup style="color:red">*</sup></h4><br/>
                        <div class="row">
                            <fieldset style="margin-left:5%; margin-top:-0.8%; width: 40%;">
                              <input name="loginusername" type="text" id="loginusername"  required="required" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                              <div id="loginusernamemsg" style="margin:1%; margin-left: 0; color:red"><?php echo $username_err; ?> </div>
                            </fieldset>
                        </div>
            
            <h4 style=" margin-top:1%; margin-left:3.8%">Password<sup style="color:red">*</sup></h4><br/>
                        <div class="row">
                            <fieldset style="margin-left:5%; margin-top:-0.8%; width: 40%;">
                              <input name="loginpassword" type="password" id="loginpassword"  required="required"class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                              <div id="loginpasswordmsg" style="margin:1%; margin-left: 0; color:red"><?php echo $password_err; ?></div>
                            </fieldset>
                        </div>
            
                        <div class="row">
                            <fieldset style="margin-left: 5%; margin-top:2%;">
                                <button type="submit" name="login" class="main-dark-button" style="width: 200%; text-align: middle">Log In</button>
                            </fieldset>
                        </div>
                        <br/><br/>
            <h4 style="font-size:120%; margin-top:-2%; margin-left:3.8%">Don't have an account? <a href="login.php">Sign up here.</a></h4><br/>
                    </form>
            </div>
        </div>
    </div>
         
    </div>
    </form>
    <br/>

    
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
    <script src="assets/js/quantity.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>
        function validateForm() {  
            //collect form data in JavaScript variables  
            var name = document.getElementById("loginusername").value;
            var pw1 = document.getElementById("loginpassword").value;  
                    
            //character data validation  
            if(name!="zartab123"){  
            document.getElementById("loginusernamemsg").innerHTML = "Error: Username is incorrect";  
            return false;  
            }  
            else { 
                document.getElementById("loginusernamemsg").innerHTML = ""; 
            }
            
            if(pw1.length < 8) {  
            document.getElementById("loginpasswordmsg").innerHTML = "Error: Password length must be at least 8 characters";  
            return false;  
            }  
            else { 
                document.getElementById("loginpasswordmsg").innerHTML = ""; 
            }

            if(pw1 != "12345678") {  
            document.getElementById("loginpasswordmsg").innerHTML = "Error: Password is incorrect";  
            return false;  
            } 
            else { 
                document.getElementById("loginpasswordmsg").innerHTML = ""; 
            }

            setTimeout(function() {window.location = "index.userid=1.php" });
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

    </script>

  </body>

</html>