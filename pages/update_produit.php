<?php
session_start();

include("function.php");
/*
if (empty($_SESSION['email'])){
    header("Location: connexion.php");
}else {*/


    $idProduit = postVar("id");
    $nom_produit = postVar("nom_produit");
    $prix = postVar("prix");
    $description = postVar("description");
    $quantite_stock = postVar("quantite_stock");
    $image = "../img/".postVar("image");


    if ($nom_produit && $prix && $description){

        $bdd = getbdd();
        $query = "UPDATE produit SET nom_produit=:nom_produit,prix=:prix,description=:description,image=:image,quantite_stock=:quantite_stock WHERE id_produit=:idProduit ";

        $result = $bdd->prepare($query);


        $result->bindParam(":idProduit", $idProduit);
        $result->bindParam(":nom_produit", $nom_produit);
        $result->bindParam(":prix", $prix);
        $result->bindParam(":description", $description);
        $result->bindParam(":image", $image);
        $result->bindParam(":quantite_stock", $quantite_stock);


        $result->execute();

        header("Location: liste_produit.php");
    }else{
        echo "ca ne marche pas ";
    }


//}
