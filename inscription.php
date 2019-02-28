<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
</head>
<body>
    <?php include("menu.php"); ?>
    <!-- multistep form -->
    <form action="newclient.php" method="post" class="msform form_inscription">
        <fieldset>
            <h2 class="fs-title">Création de votre comtpe</h2>
            <input type="text" name="lname" placeholder="Nom"/>
            <input type="text" name="fname" placeholder="Prénom"/>
            <input type="date" name="date_naissance" placeholder="date de naissance"/>
            <input type="text" name="email" placeholder="Email"/>
            <input type="password" name="pass" placeholder="Mot de passe"/>
            <input type="password" name="cpass" placeholder="Confirmation Mot de passe"/>
            <input type="text" name="phone" placeholder="Téléphone"/>
            <input type="text" name="adresse" placeholder="Adresse"/>
            <input type="text" name="ville" placeholder="Ville"/>
            <input type="text" name="postalc" placeholder="Code postal" />
            <p>Civilité : </p>
            <div class="checkbox_inscription">
                <input name="sexe" type="radio" value="Homme" ><p>Homme</p>
            </div>
            <div class="checkbox_inscription">
                <input name="sexe" type="radio" value="Femme"><p>Femme</p>
            </div>
            <input type="submit" name="submit" class="submit action-button" value="Submit" />
        </fieldset>
        <a href="#">J'ai déjà un compte</a>
    </form>
    <?php include("footer.php"); ?>
</body>
</html>














</body>

</html>
