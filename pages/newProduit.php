
<?php include("function.php"); ?>

<?php

$nom_produit = postVar("nom_produit");
$prix = postVar("prix");
$description = postVar("description");
$image = postVar("image");
$quantite_stock = postVar("quantite_stock");


if ($nom_produit && $prix && $description && $image && $quantite_stock)
{
    $bdd = getbdd();

    echo "connecté";

    $query = "INSERT INTO `produit`(`nom_produit`, `prix`, `description`, `image`, `quantite_stock`) VALUES (:nom_produit,:prix,:description,:image,:quantite_stock)";


    $result = $bdd->prepare($query);

    $result->bindParam(":nom_produit", $nom_produit);
    $result->bindParam(":prix", $prix);
    $result->bindParam(":description", $description);
    $result->bindParam(":image", $image);
    $result->bindParam(":quantite_stock", $quantite_stock);


    $result->execute();

    header('Location: liste_produit.php');


}