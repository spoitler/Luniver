<?php
include ('function.php');
session_start();
//session_destroy();

$bdd = getbdd();
$idProduit = getVar('id');

$quantite = getVar('quantite');

if (!is_numeric($idProduit)){
    echo "l'id n'est pas valide";
}else{
    $produit = getAllProduitById($bdd, $idProduit);
    if (!empty($produit)){
        if (!isset($_SESSION['panier'])){
            $_SESSION['panier'] = array();
        }
        if (isset($_SESSION['panier'][$produit->id_produit])){
            $_SESSION['panier'][$produit->id_produit] += $quantite;
            echo "le produit a bien été ajouté au panier";
        }else{
            $_SESSION['panier'][$produit->id_produit] = $quantite;
        }

    }else{
        echo "l'id n'existe pas";
    }

}


