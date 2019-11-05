<!-- <?php

$host = "localhost";
$user = "root";
$password = "";
$db = "useraccounts";

mysqli_connect($host, $user, $password);
mysqli_select_db($db,$host);

if(isset($_POST['username'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "select * from users where username='".$username."' AND password='".$password."' limit 1";
    
    $result = mysqli_query($sql);
    
    if(mysqli_num_rows($result) == 1) {
        echo "You have successfully logged in";
        exit();
    }
    else {
        echo "You have entered incorrect password";
        exit();
    }
}

?> -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Account Login</title>
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
                
                <h1 class="title">My Account Log In</h1>
            </div>
        </header>
        
        <section id="login">
            <div id="login_container">
                <h2>Log Into My Account</h2>
                
                <form id="form" action="" method="POST">
                    <div id="form_input">
                        <input type="type" id="username" placeholder="Username" name="username" />
                        <input type="password" id="password" placeholder="Password" name="password" />
                    </div>
                    <button type="submit" style="float: none;" name="login_btn"><a href="myaccount.php">Log In</a></button>
                    <p>Forgot <a href="#" class="uname">Username</a> or <a href="#" class="pass">Password</a>?</p>
                    <p>Don't have a account? <a href="create_account.php" class="cacc">Create Account</a></p>
                </form>
            </div>
        </section>
        
        
        
        <section id="join">
            <div id="join_container">
                <h1>Take advantage of our special deals</h1>
                <p>Would you like to receive coupons and special sales. To receive these special perks you must sign up to our newsletter by filling out the form below with just your email.</p>
                
                
                <input type="text" placeholder="EMAIL" />
                <button type="button" value="Subscribe"><a href="sub.html">Subscribe</a></button>
                
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
                    <div id="copyright">2019 Copyrights Reserved to Tangled U In Tulle | Designed &amp; Developed by Jonathan Cameron at <a href="http://www.camcolordesigns.com" target="_blank">Cam Color Designs</a></div>
                </div>    
            </div>
        </footer>
    </div>         

<script>
   
    
    function getInfo() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
    }
</script>        
        
    </body>
</html