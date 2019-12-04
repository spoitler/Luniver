<?php
include_once ("menu.php");
include_once ("function.php");

if ($_SESSION['type'] != "admin"){
   header('Location: index.php');
}

$id = getVar('id');

echo $id;

if (!empty ($id)){

    $bdd = getbdd();
    $query = "DELETE FROM produit WHERE id_produit=:id";

    $resultat = $bdd->prepare($query);

    $resultat->bindParam(":id", $id);

    $resultat->execute();
}

header("location: liste_produit.php");


