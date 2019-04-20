<?php
include ('function.php');
session_start();
//session_destroy();

$json = array('error' => true);

$bdd = getbdd();
$idProduit = getVar('id');

$quantite = getVar('quantite');

if (!isset($_SESSION['panier'])){
    $_SESSION['panier'] = array();
}

if (!is_numeric($idProduit)){
    echo "l'id n'est pas valide";
}else{
    $produit = getAllProduitById($bdd, $idProduit);
    if (!empty($produit)){
        $json['error'] = false;
        if (isset($_SESSION['panier'][$produit->id_produit])){
            $_SESSION['panier'][$produit->id_produit] += $quantite;
            $json['count'] = array_sum($_SESSION['panier']);
            $json['message'] = "le produit a bien ete ajoute au panier";
        }else{
            $_SESSION['panier'][$produit->id_produit] = $quantite;
            $json['count'] = array_sum($_SESSION['panier']);
            $json['message'] = "le produit a bien ete ajoute au panier";
        }
    }else{
        $json['message'] = "l'id n'existe pas";
    }

}

echo json_encode($json);
?>


