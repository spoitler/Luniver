<!DOCTYPE html>
<html>
<head>
    <title>Liste des éditeur</title>
    <?php

    include_once ("function.php");
    include_once ("../header/header.inc.html");
    session_start();

    ?>
</head>

<body>

<h1>Liste des produits</h1>


<?php
// 1er : Connexion
$bdd = getbdd();

//
if ($bdd) {
    // connexion réussie
    // La requete de base
    $query = "SELECT * FROM `produit` WHERE 1";

    $produit = $bdd->prepare($query);

    $produit->execute();

    $liste_produit = $produit->fetchAll(PDO::FETCH_OBJ);


    ?>

    <table class="table table-striped table-hover table-bordered" width="75%">
        <thead>
        <tr>
            <th width="150">Produit</th>
            <th width="50">Prix</th>
            <th width="250">Description</th>
            <th width="70">image</th>
            <th width="50">quantite</th>
            <th width="80"></th>

        </tr>
        </thead>
        <tbody>
        <?php
        // objet "$publisher" valide ?
        if ($liste_produit) {
            // On affiche chaque entrée une à une
            foreach ($liste_produit as $produit) {
                ?>
                <tr>
                    <td><?= $produit->nom_produit ?></td>
                    <td><?= $produit->prix ?></td>
                    <td><?= $produit->description ?></td>
                    <td><img width="100px" src="<?= $produit->image ?>"></td>
                    <td><?= $produit->quantite_stock ?></td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="editProduit.php?id=<?=$produit->id_produit?>">
                            <i class="fa fa-pencil-alt" aria-hidden="true"></i>&nbsp;Modifier</a>
                        <a class="btn btn-danger btn-sm" href="delProduit.php?id=<?=$produit->id_produit?>">
                            <i class="fa fa-trash-alt" aria-hidden="true"></i>&nbsp;Supprimer</a>
                    </td>

                </tr>

                <?php
            }
        }
        else {
            echo "<tr><td colspan='3'>Aucun résultat</td></tr>";
        }?>



        </tbody>
    </table>
    <?php
}

?>

</body>
</html>












