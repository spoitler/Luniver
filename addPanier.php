<?php
include ('function.php');
session_start();
//session_destroy();
var_dump($_SESSION);
$bdd = getbdd();
$idProduit = getVar('id');

if (!is_numeric($idProduit)){
    echo "l'id n'est pas valide";
}else{
    $produit = getAllProduitById($bdd, $idProduit);
    if (!empty($produit)){
        if (!isset($_SESSION['panier'])){
            var_dump($_SESSION['panier'] = array());

        }
        $_SESSION['panier'][$produit->id_produit] = 1;
        echo "le produit a bien été ajouté au panier";
    }else{
        echo "l'id n'existe pas";
    }

}


