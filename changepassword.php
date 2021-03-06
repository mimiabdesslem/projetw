<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Font Icon -->
    <link rel="stylesheet" href="../fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- The above 3 meta tags must come first in the head; any other head content must come after these tags -->

        <title>Jelizi Technologies Services</title>

        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

        <!-- Bootstrap -->
        <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css"/>

        <!-- Slick -->
        <link type="text/css" rel="stylesheet" href="../css/slick.css"/>
        <link type="text/css" rel="stylesheet" href="../css/slick-theme.css"/>

        <!-- nouislider -->
        <link type="text/css" rel="stylesheet" href="../css/nouislider.min.css"/>

        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="../css/font-awesome.min.css">

        <!-- Custom stlylesheet -->
        <link type="text/css" rel="stylesheet" href="../css/style.css"/>
</head>
<body>

        <!-- HEADER -->
        <header>
            <!-- TOP HEADER -->
          <div id="top-header">
<div class="container">
<ul class="header-links pull-left">
<li><a href="#"><i class="fa fa-phone"></i> +216-79459000</a></li>
<li><a href="#"><i class="fa fa-envelope-o"></i>
jelizi.technologie.services@gnet.tn</a></li>
<li><a href="#"><i class="fa fa-map-marker"></i> Avenue Farhat Hached
Rades</a></li>
</ul>
                    <ul class="header-links pull-right">
                        <li><a href="#"><i class="fa fa-dollar"></i>
TND</a></li>
        <li><a href="login/login.html"><i class="fa fa-user-o"></i> Espace Client</a></li>
                        <li><a href="fidelite.html"><i class="fa fa-user-o"></i> Fidelité</a></li>
                    </ul>
</div>
</div>
            <!-- /TOP HEADER -->

            <!-- MAIN HEADER -->
            <div id="header">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <!-- LOGO -->
                        <div class="col-md-3">
                            <div class="header-logo">
                                <a href="#" class="logo">
                                    <img src="./img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- /LOGO -->

                        <!-- SEARCH BAR -->
                        
                        <!-- /SEARCH BAR -->

                        <!-- ACCOUNT -->
                        <div class="col-md-3 clearfix">
                            <div class="header-ctn">
                                <!-- Wishlist -->
                                <div>
                                    <a href="#">
                                        <i class="fa fa-heart-o"></i>
                                        <span>Favoris</span>
                                        <div class="qty">2</div>
                                    </a>
                                </div>
                                <!-- /Wishlist -->

                                <!-- Cart -->
                                <div class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span>Panier</span>
                                        <div class="qty">3</div>
                                    </a>
                                    <div class="cart-dropdown">
                                        <div class="cart-list">
                                            <div class="product-widget">
                                                <div class="product-img">
                                                    <img src="./img/product01.png" alt="">
                                                </div>
                                                <div class="product-body">
                                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                                    <h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
                                                </div>
                                                <button class="delete"><i class="fa fa-close"></i></button>
                                            </div>

                                            <div class="product-widget">
                                                <div class="product-img">
                                                    <img src="./img/product02.png" alt="">
                                                </div>
                                                <div class="product-body">
                                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                                    <h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
                                                </div>
                                                <button class="delete"><i class="fa fa-close"></i></button>
                                            </div>
                                        </div>
                                        <div class="cart-summary">
                                            <small>3 Item(s) selected</small>
                                            <h5>SUBTOTAL: $2940.00</h5>
                                        </div>
                                        <div class="cart-btns">
                                            <a href="#">Voir Panier</a>
                                            <a href="checkout.html">Commander  <i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Cart -->

                                <!-- Menu Toogle -->
                                <div class="menu-toggle">
                                    <a href="#">
                                        <i class="fa fa-bars"></i>
                                        <span>Menu</span>
                                    </a>
                                </div>
                                <!-- /Menu Toogle -->
                            </div>
                        </div>
                        <!-- /ACCOUNT -->
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </div>
            <!-- /MAIN HEADER -->
        </header>
        <!-- /HEADER -->

        <!-- NAVIGATION -->
        <nav id="navigation">
            <!-- container -->
            <div class="container">
                <!-- responsive-nav -->
                <div id="responsive-nav">
                    <!-- NAV -->
                    <ul class="main-nav nav navbar-nav">
                        <li class="active"><a href="index.html">Acceuil</a></li>

                        <li><a href="Accessoires informatiques.html">Accessoires informatiques</a></li>
                        <li><a href="securite.html">Sécurité</a></li>
                        
                        <li><a href="reclamation.html">Reclamation</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                    <!-- /NAV -->
                </div>
                <!-- /responsive-nav -->
            </div>
            <!-- /container -->
        </nav>

    <div class="main">

      

        <!-- Sing in  Form -->
                                <form method="POST" class="register-form" id="login-form">

        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                       
                        <a href="creer compte.html" class="signup-image-link">Créer un compte client</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">change password</h2>
                        <form method="POST" action="verificaton.php"class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="pasword1" id="your password" placeholder="Login"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pasword2" id="your_pass" placeholder="your password"/>
                            </div>
                            <div class="form-group form-button">
                                
                                 <input type="submit" name="change_password"  value="forgot password"/>

                            </div>
                       
                    </div>
                </div>
            </div>
        </section>
                        </form>

    </div>
    
<?php 
    include "config.php";

    $user=$_SESSION["user"];
    if(isset($_POST['change_password'])){
        if($_POST['pasword1'] == $_POST['pasword2'])
        {
        $sql="UPDATE client SET Motdepasse=:pasword WHERE Email=:Email";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':Email',$user);
        $req->bindValue(':pasword',$_POST['pasword1']);
        $s=$req->execute();
    header('Location: login.html');

        }
        else {
            echo "<script>alert(\"le deux password doivent etre identiques               \")</script>";

        }
    }

  ?>
   <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <div id="newsletter" class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="newsletter">
                            <p>Veuillez entrer votre <strong>Email</strong></p>
                            <form>
                                <input class="input" type="email" placeholder="Entrez votre mail">
                                <button class="newsletter-btn"><i class="fa fa-envelope"></i> S'abonner </button>
                            </form>
                            <ul class="newsletter-follow">
                                <li>
                                    <a href="https://www.facebook.com/Jelizi.technologie.services/"><i class="fa fa-facebook"></i></a>
                                </li>
                                
                                <li>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /NEWSLETTER -->

        <!-- FOOTER -->
        <footer id="footer">
            <!-- top footer -->
            <div class="section">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <div class="footer">
                                <h3 class="footer-title">A propos de nous</h3>
                                <p>Installation et maintenance réseaux informatique, téléphonie,video surveillance, système d'alarme Vente et réparation matériaux informatiques et bureautiques.</p>
                                <ul class="footer-links">
                                    <li><a href="#"><i class="fa fa-map-marker"></i>Avenue Farhat Hached Rades</a></li>
                                    <li><a href="#"><i class="fa fa-phone"></i> +216-79459000</a></li>
                                    <li><a href="#"><i class="fa fa-envelope-o"></i>jelizi.technologie.services@gnet.tn</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-6">
                            <div class="footer">
                                <h3 class="footer-title">Categories</h3>
                                <ul class="footer-links">
                                    <li><a href="#">Accessoires Informatiques</a></li>
                                    <li><a href="#">Accessoires de sécurité</a></li>
                                    <li><a href="#">Services</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="clearfix visible-xs"></div>

                        <div class="col-md-3 col-xs-6">
                            <div class="footer">
                                <h3 class="footer-title">Informations</h3>
                                <ul class="footer-links">
                                    <li><a href="#">A propos de nous</a></li>
                                    <li><a href="#">Contact</a></li>
                                    
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-6">
                            <div class="footer">
                                <h3 class="footer-title">Client</h3>
                                <ul class="footer-links">
                                    <li><a href="#">Mon compte</a></li>
                                    <li><a href="#">Mon panier</a></li>
                                    <li><a href="#">Favoris</a></li>
                                    <li><a href="#">Suivre ma commande</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
                <!-- /container -->
            </div>
            <!-- /top footer -->

            <!-- bottom footer -->
            <div id="bottom-footer" class="section">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <ul class="footer-payments">
                                <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
                                <li><a href="#"><i class="fa fa-credit-card"></i></a></li>
                                <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
                                <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
                                <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
                                <li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
                            </ul>
                            <span class="copyright">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | made with <i class="fa fa-heart-o" aria-hidden="true"></i> by<a href="https://colorlib.com"> Untouchable</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </span>
                        </div>
                    </div>
                        <!-- /row -->
                </div>
                <!-- /container -->
            </div>
            <!-- /bottom footer -->
        </footer>
        <!-- /FOOTER -->

        <!-- jQuery Plugins -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/nouislider.min.js"></script>
        <script src="js/jquery.zoom.min.js"></script>
        <script src="js/main.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>