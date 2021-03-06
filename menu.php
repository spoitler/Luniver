<?php

session_start();

if (!isset($_SESSION['panier'])){
    $_SESSION['panier'] = array();
}
$total = 0;

foreach ($_SESSION['panier'] as $panier) {
   $total += $panier['quantite'];
}

?>
<link rel='stylesheet' href='https://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
<div class="menu">
    <nav>
        <div class="toggle">
            <div class="burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <input type="checkbox" id="checkbox_menu" onclick="valcheckbox()">
        </div>
        <div class="nav-wrapper">
            <ul class="animation-transition">
                <li class="border-gray"><a href="index.php">ACCUEIL</a></li>
                <li class="border-gray"><a href="boutique.php">BOUTIQUE</a></li>
                <li class="border-gray"><a href="a_propos.php">A PROPOS</a></li>
                <li class="border-gray"><a href="revendeur.php">REVENDEUR</a></li>
                <li class="border-gray"><a href="contact.php">CONTACT</a></li>
                <?php if (empty($_SESSION['email'])){
                        echo '<li class="border-gray"><a href="connexion.php">CONNEXION / INSCRIPTION</a></li>';
                     }else {
                        ?><li class="border-gray" id="accordion" class="accordion">
                          <div class="link">MON COMPTE<i class="fa fa-chevron-down"></i></div>
                          <ul class="submenu">
                            <li class="li-submenu"><a href="#">Commandes</a></li>
                            <li class="li-submenu"><a href="#">Favoris</a></li>
                            <li class="li-submenu"><a href="recupdonneeperso.php">Données personnelles</a></li>
                          </ul>
                        </li>
                        <li class="border-gray">
                          <div class="link"><a href="deconnexion.php">DECONNEXION</a></div>
                       </li><?php
                     }
                    ?>

            </ul>
        </div>
    </nav>
    <div class="nav-overlay"></div>
</div>
<div class="title_tel">
    <h1><a href="index.php">LUNIVER</a></h1>
</div>
<div id="shopping-cart">
    <a href="panier.php">
        <img id="img_shopping_cart" src="<?php if( $total == 0){ echo "img/shopping-cart-vide.png";}else{ echo "img/shopping-cart.png";} ?>">
        <div id="notification-icon"><span><span id="count"><?= $total ?></span></span></div>
    </a>
</div>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> -->
<script src="js/app.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="js/menu.js"></script>
<script  src="js/accordeon.js"></script>
