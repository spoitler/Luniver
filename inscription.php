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
    <!-- multistep form -->
    <form action="newclient.php" method="post" class="msform form_inscription">
        <fieldset>
            <h2 class="fs-title">Création de votre comtpe</h2>
            <input type="text" name="lname" placeholder="Nom" required/>
            <input type="text" name="fname" placeholder="Prénom" required/>
            <input type="date" name="date_naissance" placeholder="date de naissance" required/>
            <input type="email" name="email" placeholder="Email" required/>
            <input type="password" name="pass" placeholder="Mot de passe" required/>
            <input type="text" name="phone" placeholder="Téléphone" required/>
            <input type="text" name="adresse" placeholder="Adresse" required/>
            <input type="text" name="ville" placeholder="Ville" required/>
            <input type="text" name="postalc" placeholder="Code postal" required/>
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
        <div id="submit_inscription">
            <input type="submit" name="submit" class="submit action-button" value="Submit" />
            <p><a href="connexion.php">J'ai déjà un compte</a></p>
        </div>
    </form>
    <?php include("footer.php"); ?>
</body>
</html>














</body>

</html>
