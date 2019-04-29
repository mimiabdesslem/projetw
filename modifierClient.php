<?PHP
include "../entities/client.php";
include "../core/clientC.php";
if (isset($_GET['mail'])){
	$ClientC=new ClientC();
    $result=$ClientC->recupererClient($_GET['mail']);
	foreach($result as $row){
		$Id_client=$row['Id_client'];
		$Nom=$row['Nom'];
		$Prenom=$row['Prenom'];
		$Email=$row['Email'];
		$Motdepasse=$row['Motdepasse'];
		$Adresse=$row['Adresse'];
        $Telephone=$row['Telephone'];
		


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
<caption><h1><center>Modifier votre compte</center></h1></caption>
<form method="POST">
<table>


<tr>
<td>Nom</td>
<td><input type="text" name="Nom" value="<?PHP echo $Nom ?>"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="text" name="Prenom" value="<?PHP echo $Prenom ?>"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="Email" value="<?PHP echo $Email ?>"></td>
</tr>
<tr>

<td>Motdepasse</td>
<td><input type="text" name="Motdepasse" value="<?PHP echo $Motdepasse ?>"></td>
</tr>
<tr>
<td>Adresse</td>
<td><input type="text" name="Adresse" value="<?PHP echo $Adresse ?>"></td>
</tr>
<tr>

<td>telephone</td>
<td><input type="text" name="telephone" value="<?PHP echo $Telephone ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="Telephone" value="<?PHP echo $_GET['mail'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$Client=new Client($_POST['Nom'],$_POST['Prenom'],$_POST['Email'],$_POST['Motdepasse'],$_POST['Adresse'],$_POST['telephone']);
	$ClientC->modifierClient($Client,$_GET['mail']);
	echo $_POST['Email'];
	echo ("<script LANGUAGE='JavaScript'>window.location.href='dashbord.php';</script>");

	//header('Location: login.html');
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
