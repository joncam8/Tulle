<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Account Login</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/main.css">
        
        <style>
            .cacco a:hover {
                color:rgba(100, 180, 160, .4);
                opacity: .9;
                text-decoration: none;
            }
        </style>
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
                
                <h1 class="title">My Account Log In</h1>
            </div>
        </header>
        
        <section id="login">
            <div id="login_container">
                <h2>Log Into My Account</h2>
                
                <?php
                
                    if(@$_GET['Empty']==true)
                    {
                ?>
                <div class="alert-danger text-danger text-center py-3" style="max-width:400px; margin:auto;"><?php echo $_GET['Empty'] ?></div>
                <?php
                    }
                ?>
                
                <?php
                
                    if(@$_GET['Invalid']==true)
                    {
                ?>
                <div class="alert-danger text-danger text-center py-3" style="max-width:400px; margin:auto; animation: 2s easeIn"><?php echo $_GET['Invalid'] ?></div>
                <?php
                    }
                ?>
                
                <form id="form" action="myaccount.php" method="POST">
                    <div id="form_input">
                        <input type="type" id="username" placeholder="Username" name="username" />
                        <input type="password" id="password" placeholder="Password" name="password" />
                    </div>
                    <button type="submit" name="login_btn">Log In</button>
                    <p>Forgot your <a href="forgotpass.php" class="pass">Password</a>?</p>
                    <p>Don't have a account? <a href="create_account.php" class="cacco" style="color:rgba(100, 180, 160, 1);">Create Account</a></p>
                </form>
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
                        <li><a href="create_account.php">Create Account</a></li>
                    </ul>
                </div>
                <div class="footer_info" id="acc">
                    <h3>Account</h3>
                    <ul>
                        <li><a href="login.php">My Account</a></li>
                        <li><a href="login.php">Order History</a></li>
                        <li><a href="login.php">Wish List</a></li>
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
</html>