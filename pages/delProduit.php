
    <?php
    include_once ("../header/header.inc.html");
    include_once ("function.php");
    ?>




<?php
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

?>
