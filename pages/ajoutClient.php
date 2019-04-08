<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Edition d'un éditeur</title>
    <?php
    include ("menu.php");
    include_once ("../header/header.inc.html");
    include_once ("function.php");
    ?>
</head>
<body>
<?php

    $id = getVar("id");
?>
<h2>Création d'un Client</h2>

<a href="listeClient.php">Retour à la liste</a>
<br />
<br />

<form action="newclient.php" method="post">
    <div class="form-group">
        <input type="text" class="form-control" name="nom" placeholder="Entrez le nom" />
        <input type="text" class="form-control" name="prenom" placeholder="Entrez le prenom" />
        <input type="date" class="form-control" name="date_naissance" placeholder="Entrez la date de naisssance" />
        <input type="email" class="form-control" name="email" placeholder="Entrez l'email" />
        <input type="text" class="form-control" name="adresse" placeholder="Entrez l'adresse" />
        <input type="text" class="form-control" name="telephone" placeholder="Entrez le numero de telephone" />
        <input type="text" class="form-control" name="ville" placeholder="Entrez le ville" />
        <input type="text" class="form-control" name="postalc" placeholder="Entrez le code postal" />
        <p>Sexe :</p>
        <div id="civilite_inscription">
            <div class="checkbox_inscription">
                <input name="sexe" type="radio" value="Homme"><p>Homme</p>
            </div>
            <div class="checkbox_inscription">
                <input name="sexe" type="radio" value="Femme"><p>Femme</p>
            </div>
        </div>
    </div>

    <input type="submit" value="Valider" class="btn btn-primary" />

</form>
</body>
</html>