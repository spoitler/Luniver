<?php

session_start();

if (!isset($_SESSION['panier'])){
    $_SESSION['panier'] = array();
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
            <ul>
                <li><a href="index.php">ACCUEIL</a></li>
                <li><a href="boutique.php">BOUTIQUE</a></li>
                <li><a href="a_propos.php">A PROPOS</a></li>
                <li><a href="revendeur.php">REVENDEUR</a></li>
                <li><a href="contact.php">CONTACT</a></li>
                <?php if (empty($_SESSION['email'])){
                        echo '<li><a href="connexion.php">CONNEXION / INSCRIPTION</a></li>';
                    }else{
                        echo '<li id="accordion" class="accordion">
                                <div class="link"><span>MON COMPTE</span><i class="fa fa-chevron-down"></i></div>
                                <ul class="submenu" id="dropdown_menu">
                                  <li><a class="accordeon_cont" href="#">Commandes</a></li>
                                  <li><a class="accordeon_cont" href="#">Favoris</a></li>
                                  <li><a class="accordeon_cont" href="recupdonneeperso.php">Données personnelles</a></li>
                                </ul>
                            </li>';
                    }?>
                <li><a href="deconnexion.php">DECONNEXION</a></li>
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
        <img id="img_shopping_cart" src="img/shopping-cart-vide.png">
        <div id="notification-icon"><span><?php if(array_sum($_SESSION['panier']) == 0){ echo "0";}else{ echo array_sum($_SESSION['panier']);} ?></span></div>
    </a>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="js/menu.js"></script>
<script  src="js/accordeon.js"></script>