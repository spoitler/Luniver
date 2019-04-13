<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LUNIVER</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
</head>
<body>
<?php include("function.php");
include_once ("menu.php");
?>
    <div id="container_produit">
        <div id="previsu_img_produit">
            <p><img id="img_principale_produit" src="img/produit1.jpg"></p>
            <div id="mini_img_produit">
                <p><img src="img/produit1.jpg"></p>
                <p><img src="img/produit1.jpg"></p>
                <P><img src="img/produit1.jpg"></P>
            </div>
        </div>
        <div id="info_produit">
            <h3>TEE - SHIRT NOIR</h3>
            <p>50 €</p>
            <div id="quantite_produit">
                <p>Quantité </p>
                <input type="number" name="quantite">
            </div>
            <div id="taille_produit">
                <p>Taille </p>
                <button>S<input type="checkbox"></button>
                <button>M<input type="checkbox"></button>
                <button>L<input type="checkbox"></button>
            </div>
            <button>AJOUTER AU PANIER</button>
            <div>
                <h4>Détails</h4>
                <div id="trait_produit"></div>
                <p>100% Cotton</p>
                <p>Coloris noir</p>
                <p></p>
            </div>
        </div>
    </div>
</body>
</html>