<?php

session_start();

include("function.php");

if (empty($_SESSION['email'])){
    header("Location: connexion.php");
}else{

    $bdd = getbdd();

    $donnees = getAllClient($bdd, $_SESSION['email']);

}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>LUNIVER</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    </head>
    <body>
        <?php include("menu.php"); ?>

        <form action="newclient.php" method="post" class="msform form_inscription">
            <fieldset>
                <h2 class="fs-title">Modification des informations personnel</h2>
                <input type="text" name="lname" placeholder="Nom" value="<?= $donnees->nom_client; ?>" required/>
                <input type="text" name="fname" placeholder="Prénom" value="<?= $donnees->prenom_client; ?>" required/>
                <input type="date" name="date_naissance" placeholder="date de naissance" value="<?= $donnees->date_naissance; ?>" required/>
                <input type="email" name="email" placeholder="Email" value="<?= $donnees->email; ?>" required/>
                <input type="text" name="phone" placeholder="Téléphone" value="<?= $donnees->telephone; ?>" required/>
                <input type="text" name="adresse" placeholder="Adresse" value="<?= $donnees->adresse; ?>" required/>
                <input type="text" name="ville" placeholder="Ville" value="<?= $donnees->ville; ?>" required/>
                <input type="text" name="postalc" placeholder="Code postal" value="<?= $donnees->code_postal; ?>" required/>
            </fieldset>
            <div>
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
            <div id="submit_info_perso">
                <input type="submit" name="submit" class="submit action-button" value="Mettre à jour" />
            </div>
        </form>
        <?php  include("footer.php"); ?>
    </body>
</html>