<?php
include ('function.php');
session_start();
// session_destroy();

$total = 0;

$json = array('error' => true);

$bdd = getbdd();
$idProduit = getVar('id');
$quantite = getVar('quantite');
$taille = getVar('taille');

if (!isset($_SESSION['panier'])){
    $_SESSION['panier'] = array();
}

// var_dump($_SESSION['panier']);

if (!is_numeric($idProduit)){
    echo "l'id n'est pas valide";
}else{
    $produit = getAllProduitById($bdd, $idProduit);
    if (!empty($produit)){
        $json['error'] = false;
        if (isset($_SESSION['panier'][$produit->id_produit])){
            $_SESSION['panier'][$produit->id_produit]['quantite'] += ( int )$quantite;
            $_SESSION['panier'][$produit->id_produit]['taille'] = $taille;
            foreach ($_SESSION['panier'] as $panier) {
               $total += $panier['quantite'];
            }
            $json['count'] = $total;
            $json['message'] = 'le produit a bien ete ajoute au panier ';
        }else{
            $_SESSION['panier'][$produit->id_produit]['quantite'] = ( int ) $quantite;
            $_SESSION['panier'][$produit->id_produit]['taille'] = $taille;
            foreach ($_SESSION['panier'] as $panier) {
               $total += $panier['quantite'];
            }
            $json['count'] = $total;
            $json['message'] = 'le produit a bien ete ajoute au panier';
        }
    }else{
        $json['message'] = "l'id n'existe pas";
    }

}

echo json_encode($json);
?>
