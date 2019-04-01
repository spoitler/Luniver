<!DOCTYPE html>
<html>
<head>
    <title>Edition d'un éditeur</title>
    <?php
    include_once ("../header/header.inc.html");
    include_once ("function.php");
    ?>
</head>

<body>
<h2>Edition d'un Client</h2>

<?php
// On regarde comment a été appellé la page
$idClient = getVar('id');


// L'utilisateur a cliqué sur le lien a href
if (!empty($idClient)) {
// 1 : Connexion à la BD
    $bdd = getbdd();

    // L'id doit être une valeur numérique
        // Id correct
    $luniver = getAllClientById($bdd, $idClient);
    if ($luniver == null){
        $id = -1;
    }else{
        $id=1;
    }
}

?>

<a href="listeClient.php">Retour à la liste</a>
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

<form action="updateClient.php" method="post">
    <div class="form-group">
        <input type="text" class="form-control" name="nom" placeholder="Entrez le nom" value="<?= $luniver->nom_client ?>" />
        <input type="text" class="form-control" name="prenom" placeholder="Entrez le prenom" value="<?= $luniver->prenom_client ?>" />
        <input type="date" class="form-control" name="naissance" placeholder="Entrez la date de naisssance" value="<?= $luniver->date_naissance ?>" />
        <input type="email" class="form-control" name="email" placeholder="Entrez l'email" value="<?= $luniver->email ?>" />
        <input type="text" class="form-control" name="sexe" placeholder="Entrez le sexe" value="<?= $luniver->sexe ?>" />
        <input type="text" class="form-control" name="adresse" placeholder="Entrez l'adresse" value="<?= $luniver->adresse ?>" />
        <input type="text" class="form-control" name="telephone" placeholder="Entrez le numero de telephone" value="<?= $luniver->telephone ?>" />
        <input type="text" class="form-control" name="ville" placeholder="Entrez le ville" value="<?= $luniver->ville ?>" />
        <input type="text" class="form-control" name="postalc" placeholder="Entrez le code postal" value="<?= $luniver->code_postal ?>" />
    </div>

    <input type="hidden" name="id" value="<?= $idClient ?>" />

    <input type="submit" value="Valider" class="btn btn-primary" />

</form>
</body>
</html>
<?php
}
?>