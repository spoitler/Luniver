<?php
include ('function.php');
session_start();
//session_destroy();

$json = array('error' => true);
$total = 0;
$bdd = getbdd();
$idProduit = getVar('id');
$quantite = getVar('quantite');

if (!is_numeric($idProduit)){
    echo "l'id n'est pas valide";
}else{
    $produit = getAllProduitById($bdd, $idProduit);
    if (!empty($produit)){
        $json['error'] = false;
        if (isset($_SESSION['panier'][$produit->id_produit])){
            $_SESSION['panier'][$produit->id_produit]['quantite'] = (int) $quantite;
            foreach ($_SESSION['panier'] as $panier) {
               $total += $panier['quantite'];
            }
            $json['count'] = $total;
            $json['message'] = "le produit a bien ete ajoute au panier";
        }else{
            $_SESSION['panier'][$produit->id_produit]['quantite'] = (int) $quantite;
            foreach ($_SESSION['panier'] as $panier) {
               $total += $panier['quantite'];
            }
            $json['count'] =  $total;
            $json['message'] = "le produit a bien ete ajoute au panier";
        }
    }else{
        $json['message'] = "l'id n'existe pas";
    }

}

echo json_encode($json);
?>
