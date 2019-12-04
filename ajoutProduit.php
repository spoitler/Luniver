<!DOCTYPE html>
<html>
<head>
    <title>Création d'un produit</title>
    <?php
    include_once ("menu.php");
    include_once ("header/header.inc.html");
    include_once ("function.php");
    ?>
</head>
<body>
<?php

$id = getVar("id");
?>
<h2>Création d'un Produit</h2>

<a href="liste_produit.php">Retour à la liste</a>
<br />
<br />

<form action="newProduit.php" method="post">
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" class="form-control" name="nom_produit" placeholder="Entrez le nom" />
        <input type="text" class="form-control" name="prix" placeholder="Entrez le prix" />
        <input type="text" class="form-control" name="description" placeholder="Entrez la description" />
        <input type="file" class="form-control" name="image" placeholder="Entrez l'image" />
        <input type="text" class="form-control" name="quantite_stock" placeholder="Entrez la quantité en stock" />
    </div>

    <input type="hidden" name="id" value="<?= $id ?>" />

    <input type="submit" value="Valider" class="btn btn-primary" />

</form>
</body>
</html>