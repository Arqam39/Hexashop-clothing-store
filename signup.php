<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Additional CSS Files -->
    <title>Hexashop Sign Up</title>
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
                            <li class="scroll-to-section"><a href="signup.php" class="active">Sign Up</a></li>
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

    <?php
    include_once(".\config\config.php");
    $username = $password = $confirm_password = "";
    $username_err = $password_err = $confirm_password_err = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
 
        // Validate username
        if(empty(trim($_POST["signupusername"]))){
            $username_err = "Please enter a username.";
        } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["signupusername"]))){
            $username_err = "Username can only contain letters, numbers, and underscores.";
        } else{
            // Prepare a select statement
            $sql = "SELECT userid FROM users WHERE username = ?";
            
            if($stmt = mysqli_prepare($conn, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "s", $param_username);
                
                // Set parameters
                $param_username = trim($_POST["signupusername"]);
                
                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
                    /* store result */
                    mysqli_stmt_store_result($stmt);
                    
                    if(mysqli_stmt_num_rows($stmt) == 1){
                        $username_err = "This username is already taken.";
                    } else{
                        $username = trim($_POST["signupusername"]);
                    }
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }
    
                // Close statement
                mysqli_stmt_close($stmt);
            }
        }
        
        // Validate password
        if(empty(trim($_POST["signuppassword"]))){
            $password_err = "Please enter a password.";     
        } elseif(strlen(trim($_POST["signuppassword"])) < 6){
            $password_err = "Password must have atleast 6 characters.";
        } else{
            $password = trim($_POST["signuppassword"]);
        }
        
        // Validate confirm password
        if(empty(trim($_POST["signuppassword2"]))){
            $confirm_password_err = "Please confirm password.";     
        } else{
            $confirm_password = trim($_POST["signuppassword2"]);
            if(empty($password_err) && ($password != $confirm_password)){
                $confirm_password_err = "Passwords did not match.";
            }
        }
        
        // Check input errors before inserting in database
        if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
            
            // Prepare an insert statement
            $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
             
            if($stmt = mysqli_prepare($conn, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
                
                // Set parameters
                $param_username = $username;
                $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
                
                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
                    // Redirect to login page
                    header("location: login.php");
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
    <h2 style="text-align:center">Sign Up</h2>
      
    <div class="subscribe">
        <div class="row">
            <div class="container" style="width:100%">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <h4 style=" margin-top:-4.5%; margin-left:3.8%">Full Name<sup style="color:red">*</sup></h4><br/><br/><br/>
                        <div class="row">
                            <fieldset style="margin-left:5%; margin-top:-5%; width: 40%;">
                              <input name="signupname" type="text" id="fullname"  required="required">
                              <div id="namemsg" style="margin:1%; margin-left: 0; color:red"> </div>
                            </fieldset>
                        
                        </div>
            <h4 style=" margin-top:0%; margin-left:3.8%">Username<sup style="color:red">*</sup></h4><br/>
                        <div class="row">
                            <fieldset style="margin-left:5%; margin-top:-0.8%; width: 40%;">
                              <input name="signupusername" type="text" id="signupusername"  required="required" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                              <div id="usernamemsg" style="margin:1%; margin-left: 0; color:red"><?php echo $username_err; ?> </div>
                            </fieldset>
                        </div>
            <h4 style=" margin-top:1%; margin-left:3.8%">E-mail Address<sup style="color:red">*</sup></h4><br/>
                        <div class="row">
                            <fieldset style="margin-left:5%; margin-top:-0.8%; width: 40%;">
                              <input name="signupemail" type="email" id="email" pattern="[^ @]*@[^ @]*" required="required" >
                              <div id="emailmsg" style="margin:1%; margin-left: 0; color:red"> </div>
                            </fieldset>
                        </div>
            <h4 style=" margin-top:1%; margin-left:3.8%">Password<sup style="color:red">*</sup></h4><br/>
                        <div class="row">
                            <fieldset style="margin-left:5%; margin-top:-0.8%; width: 40%;">
                              <input name="signuppassword" type="password" id="signuppassword"  required="required"class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                              <div id="passwordmsg" style="margin:1%; margin-left: 0; color:red"><?php echo $password_err; ?> </div>
                            </fieldset>
                        </div>
            <h4 style=" margin-top:1%; margin-left:3.8%">Re-enter Password<sup style="color:red">*</sup></h4><br/>
                        <div class="row">
                            <fieldset style="margin-left:5%; margin-top:-0.8%; width: 40%;">
                              <input name="signuppassword2" type="password" id="signuppassword2"  required="required" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                              <div id="password2msg" style="margin:1%; margin-left: 0; color:red"><?php echo $confirm_password_err; ?> </div>
                            </fieldset>
                        </div>
                        <div class="row">
                            <fieldset style="margin-left: 5%; margin-top:2%;">
                                <button type="submit" name="signup" class="main-dark-button" style="width: 200%; text-align: middle">Sign Up</button>
                            </fieldset>
                        </div>
                        <br/><br/>
            <h4 style="font-size:120%; margin-top:-2%; margin-left:3.8%">Already have an account? <a href="login.php">Log in here.</a></h4><br/>
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
            var name = document.getElementById("fullname").value;
            var pw1 = document.getElementById("signuppassword").value;  
            var pw2 = document.getElementById("signuppassword2").value;  
                    
            //character data validation  
            if(!isNaN(name)){  
            document.getElementById("namemsg").innerHTML = "Error: Only characters are allowed in the name";  
            return false;  
            }  
            else { 
                document.getElementById("namemsg").innerHTML = ""; 
            }
            
            //minimum password length validation  
            if(pw1.length < 8) {  
            document.getElementById("passwordmsg").innerHTML = "Error: Password length must be at least 8 characters";  
            return false;  
            }  
            else { 
                document.getElementById("passwordmsg").innerHTML = ""; 
            }

            //maximum length of password validation  
            if(pw1.length > 15) {  
            document.getElementById("passwordmsg").innerHTML = "Error: Password length must not exceed 15 characters";  
            return false;  
            }  
            else { 
                document.getElementById("passwordmsg").innerHTML = ""; 
            }

            if(pw1 != pw2) {  
            document.getElementById("password2msg").innerHTML = "Error: Passwords do not match";  
            return false;  
            } 
            else { 
                document.getElementById("password2msg").innerHTML = ""; 
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