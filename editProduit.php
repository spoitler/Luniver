<!DOCTYPE html>
<html>
<head>
    <title>Edition d'un produit</title>
    <?php
    include_once ("menu.php");
    include_once ("header/header.inc.html");
    include_once ("function.php");
    ?>
</head>

<body>
<h2>Edition d'un produit</h2>

<?php
// On regarde comment a été appellé la page
$idProduit = getVar('id');

// L'utilisateur a cliqué sur le lien a href
if (!empty($idProduit)) {
// 1 : Connexion à la BD
    $bdd = getbdd();

    // L'id doit être une valeur numérique
        // Id correct
    $query = "SELECT * FROM produit WHERE id_produit=:idProduit";
    $produit = $bdd->prepare($query);
    $produit->bindParam(":idProduit",$idProduit);
    $produit->execute();

    $produit = $produit->fetch(PDO::FETCH_OBJ);

    if ($produit == null){
        $id = -1;
    }else{
        $id=1;
    }
}

?>

<a href="liste_produit.php">Retour à la liste</a>
<br />
<br />

<?php
if ($id == -1) {
    ?>
    <p>L'éditeur n'existe pas</p>
    <?php
}
else {
    ?>

<form action="update_produit.php" method="post">
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" class="form-control" name="nom_produit" placeholder="Entrez le nom " value="<?= $produit->nom_produit ?>" />
        <input type="text" class="form-control" name="prix" placeholder="Entrez le prix " value="<?= $produit->prix ?>" />
        <input type="text" class="form-control" name="description" placeholder="Entrez la description " value="<?= $produit->description ?>" />
        <input type="file" class="form-control" name="image" placeholder="Entrez l'image " value="<?= $produit->image ?>" />
        <input type="text" class="form-control" name="quantite_stock" placeholder="Entrez la quantité" value="<?= $produit->quantite_stock ?>" />

    </div>

    <input type="hidden" name="id" value="<?php echo $idProduit ?>" />

    <input type="submit" value="Valider" class="btn btn-primary" />

</form>
</body>
</html>
<?php
}
?>