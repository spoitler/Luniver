<?php
include ('function.php');
session_start();
//session_destroy();

$json = array('error' => true);
$total = 0;
$bdd = getbdd();
$idProduit = getVar('id');
$quantite = getVar('quantite');
$taille = getVar('taille');
if (!isset($_SESSION['panier'])){
    $_SESSION['panier'] = array();
}
$produit = getAllProduitById($bdd, $idProduit);

if (isset($_GET['quantite'])) {

   if (!is_numeric($idProduit)){
       echo "l'id n'est pas valide";
   }else{
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
               $json['count'] = $total;
               $json['message'] = "le produit a bien ete ajoute au panier";
           }
       }else{
           $json['message'] = "l'id n'existe pas";
       }

   }
}elseif (isset($_GET['taille'])) {
   if (is_numeric($taille)){
       echo "la taille n'est pas valide";
   }else{
       if (!empty($taille)){
           $json['error'] = false;
           if (isset($_SESSION['panier'][$produit->id_produit])){
               $_SESSION['panier'][$produit->id_produit]['taille'] = $taille;
               $json['message'] = "le produit a bien ete ajoute au panier";
           }else{
               $_SESSION['panier'][$produit->id_produit]['taille'] = $taille;
               $json['message'] = "le produit a bien ete ajoute au panier";
           }
       }else{
           $json['message'] = "taille invalide";
       }

   }
}
echo json_encode($json);
?>
