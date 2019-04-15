<?php
    include ("function.php");
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>LUNIVER</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    </head>
    <body id="body">
        <?php include("menu.php"); ?>
        <div id="container_shop">
            <?php
                $bdd = getbdd();
                $produits = getProduits($bdd);
                foreach ($produits as $produit){
            ?>
            <div class="container_produit_boutique">
                <p>
                    <a href="produit.php?id=<?= $produit->id_produit ?>">
                        <img src="<?= $produit->image?>" alt="">
                    </a>
                </p>
                <div class="ligne_produit_boutique"></div>
                <div class="desc_produit_boutique">
                    <p><?= $produit->nom_produit ?></p>
                    <p><?= $produit->prix ?></p>
                </div>
            </div><?php

            }?>










<!--            <div class="container_produit_boutique">-->
<!--                <p>-->
<!--                    <a href="#">-->
<!--                        <img src="img/produit2.jpg" alt="">-->
<!--                    </a>-->
<!--                </p>-->
<!--                <div class="ligne_produit_boutique"></div>-->
<!--                <div class="desc_produit_boutique">-->
<!--                    <p>TEE - SHIRT NOIR</p>-->
<!--                    <p>50€</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="container_produit_boutique">-->
<!--                <p>-->
<!--                    <a href="#">-->
<!--                        <img src="img/produit3.jpg" alt="">-->
<!--                    </a>-->
<!--                </p>-->
<!--                <div class="ligne_produit_boutique"></div>-->
<!--                <div class="desc_produit_boutique">-->
<!--                    <p>TEE - SHIRT NOIR</p>-->
<!--                    <p>50€</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="container_produit_boutique">-->
<!--                <p>-->
<!--                    <a href="#">-->
<!--                        <img src="img/produit1.jpg" alt="">-->
<!--                    </a>-->
<!--                </p>-->
<!--                <div class="ligne_produit_boutique"></div>-->
<!--                <div class="desc_produit_boutique">-->
<!--                    <p>TEE - SHIRT NOIR</p>-->
<!--                    <p>50€</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="container_produit_boutique">-->
<!--                <p>-->
<!--                    <a href="#">-->
<!--                        <img src="img/produit2.jpg" alt="">-->
<!--                    </a>-->
<!--                </p>-->
<!--                <div class="ligne_produit_boutique"></div>-->
<!--                <div class="desc_produit_boutique">-->
<!--                    <p>TEE - SHIRT NOIR</p>-->
<!--                    <p>50€</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="container_produit_boutique">-->
<!--                <p>-->
<!--                    <a href="#">-->
<!--                        <img src="img/produit3.jpg" alt="">-->
<!--                    </a>-->
<!--                </p>-->
<!--                <div class="ligne_produit_boutique"></div>-->
<!--                <div class="desc_produit_boutique">-->
<!--                    <p>TEE - SHIRT NOIR</p>-->
<!--                    <p>50€</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="container_produit_boutique">-->
<!--                <p>-->
<!--                    <a href="#">-->
<!--                        <img src="img/produit1.jpg" alt="">-->
<!--                    </a>-->
<!--                </p>-->
<!--                <div class="ligne_produit_boutique"></div>-->
<!--                <div class="desc_produit_boutique">-->
<!--                    <p>TEE - SHIRT NOIR</p>-->
<!--                    <p>50€</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="container_produit_boutique">-->
<!--                <p>-->
<!--                    <a href="#">-->
<!--                        <img src="img/produit2.jpg" alt="">-->
<!--                    </a>-->
<!--                </p>-->
<!--                <div class="ligne_produit_boutique"></div>-->
<!--                <div class="desc_produit_boutique">-->
<!--                    <p>TEE - SHIRT NOIR</p>-->
<!--                    <p>50€</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="container_produit_boutique">-->
<!--                <p>-->
<!--                    <a href="#">-->
<!--                        <img src="img/produit1.jpg" alt="">-->
<!--                    </a>-->
<!--                </p>-->
<!--                <div class="ligne_produit_boutique"></div>-->
<!--                <div class="desc_produit_boutique">-->
<!--                    <p>TEE - SHIRT NOIR</p>-->
<!--                    <p>50€</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="container_produit_boutique">-->
<!--                <p>-->
<!--                    <a href="#">-->
<!--                        <img src="img/produit3.jpg" alt="">-->
<!--                    </a>-->
<!--                </p>-->
<!--                <div class="ligne_produit_boutique"></div>-->
<!--                <div class="desc_produit_boutique">-->
<!--                    <p>TEE - SHIRT NOIR</p>-->
<!--                    <p>50€</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="container_produit_boutique">-->
<!--                <p>-->
<!--                    <a href="#">-->
<!--                        <img src="img/produit3.jpg" alt="">-->
<!--                    </a>-->
<!--                </p>-->
<!--                <div class="ligne_produit_boutique"></div>-->
<!--                <div class="desc_produit_boutique">-->
<!--                    <p>TEE - SHIRT NOIR</p>-->
<!--                    <p>50€</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="container_produit_boutique">-->
<!--                <p>-->
<!--                    <a href="#">-->
<!--                        <img src="img/produit1.jpg" alt="">-->
<!--                    </a>-->
<!--                </p>-->
<!--                <div class="ligne_produit_boutique"></div>-->
<!--                <div class="desc_produit_boutique">-->
<!--                    <p>TEE - SHIRT NOIR</p>-->
<!--                    <p>50€</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="container_produit_boutique">-->
<!--                <p>-->
<!--                    <a href="#">-->
<!--                        <img src="img/produit2.jpg" alt="">-->
<!--                    </a>-->
<!--                </p>-->
<!--                <div class="ligne_produit_boutique"></div>-->
<!--                <div class="desc_produit_boutique">-->
<!--                    <p>TEE - SHIRT NOIR</p>-->
<!--                    <p>50€</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="container_produit_boutique">-->
<!--                <p>-->
<!--                    <a href="#">-->
<!--                        <img src="img/produit3.jpg" alt="">-->
<!--                    </a>-->
<!--                </p>-->
<!--                <div class="ligne_produit_boutique"></div>-->
<!--                <div class="desc_produit_boutique">-->
<!--                    <p>TEE - SHIRT NOIR</p>-->
<!--                    <p>50€</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="container_produit_boutique">-->
<!--                <p>-->
<!--                    <a href="#">-->
<!--                        <img src="img/produit1.jpg" alt="">-->
<!--                    </a>-->
<!--                </p>-->
<!--                <div class="ligne_produit_boutique"></div>-->
<!--                <div class="desc_produit_boutique">-->
<!--                    <p>TEE - SHIRT NOIR</p>-->
<!--                    <p>50€</p>-->
<!--                </div>-->
<!--            </div>-->
        </div>
        <?php include("footer.php"); ?>
    </body>
</html>