<?php

require_once('connection.php');
session_start();

    if(isset($_POST['login_btn']))
    {
        if(empty($_POST['username']) || empty($_POST['password']))
        {
            header("location:login.php?Empty= Must fill out the form to login.");
        }
        else
        {
            $query = "select * from users where username='".$_POST['username']."' and password='".$_POST['password']."'";
            $result = mysqli_query($con, $query);
            
            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User'] = $_POST['username'];
                header("location:myaccount.php");
            }
            else
            {
                header("location:login.php?Invalid= Please enter correct user name and password");
            }
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/main.css">
    </head>
    
    <body>
        
    <div id="wrapper">
        
        <header id="header">
            <div id="top_nav">
                <nav id="navlist1">
                    <ul>
                        <li><a href="login.php">My Account</a></li>
                        <li><a href="mycart_login.html">My Cart <img src="images/cart_icon.png"> 0 </a></li>
                        <li><a href="login.php">LogIn</a></li>
                        <li><a href="create_account.php">Create Account</a></li>
                    </ul>
                </nav>

                <div id="search_bar">
                    <input type="search" placeholder="Search" /><div id="search_container"><a href="#"><img id="search" src="images/search_icon.png" /></a></div>
                </div>

            </div>
            
            <div class="logo page_logo" id="logo"><a href="index.html"><img src="images/logo.png"></a></div>
            
            <div id="header_inner_container">
                
                <h1 class="title">My Account</h1>
            </div>
        </header>
        
        <section id="myaccount">
            <div id="myaccount_container">
                
                <h2>Your Account Information</h2>
                
                <p>You are now logged in.</p>
                <p>Click <a href="shop.html">here</a> to continue shopping.</p>
                
                
            </div>
            
            
        </section>
        
        
        
        <section id="join">
            <div id="join_container">
                <h1>Take advantage of our special deals</h1>
                <p>Would you like to receive coupons and special sales. To receive these special perks you must sign up to our newsletter by filling out the form below with just your email.</p>
                
                <form action="sub.html" method="get">
                    <input type="email" placeholder="EMAIL" required />
                    <button type="submit" value="Subscribe">Subscribe</button>
                </form>
            </div>
        </section>
        
        <footer id="footer">
            <div id="footer_container">
                <div class="footer_info" id="loc">
                    <h3>Local Navigation</h3>
                    <ul>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="login.php">My Cart</a></li>
                        <li><a href="login.php">Login</a></li>
                        
                    </ul>
                </div>
                <div class="footer_info" id="acc">
                    <h3>Account</h3>
                    <ul>
                        <li><a href="login.php">My Account</a></li>
                        <li><a href="create_account.php">Create Account</a></li>
                        <li><a href="newsletter.html">Newsletter</a></li>
                    </ul>
                </div>
                <div class="footer_info" id="soc">
                    <div class="logo" id="footer_logo"><a href="index.html"><img src="images/logo.png"></a></div>
                    
                    <p>FOLLOW &amp; CONNECT</p>
                    
                    <ul>
                        <li><a href="http://www.facebook.com" target="_blank"><img src="images/facebook_icon.png"></a></li>
                        <li><a href="http://www.twitter.com" target="_blank"><img src="images/twitter_icon.png"></a></li>
                        <li><a href="http://www.linkedin.com" target="_blank"><img src="images/linkedin_icon.png"></a></li>
                    </ul>
                </div>  
            </div>
            <div id="bottom_footer">
                <div id="bottom_footer_container">
                    <div id="copyright">2019 Copyrights Reserved to Tangled Up In Tulle | Designed &amp; Developed by Jonathan Cameron at <a href="http://www.camcolordesigns.com" target="_blank">Cam Color Designs</a></div>
                </div>    
            </div>
        </footer>
    </div>         
        
    </body>
</html