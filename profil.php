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
        <?php include("menu.php"); session_destroy(); ?>

        <div id="container_profil">
            <div>
                <h3>Commandes</h3>
            </div>
            <div>
                <h3>Favoris</h3>
            </div>
            <div>
                <h3>Données Personnelle</h3>
            </div>
            <div>
                <h3>Modification Mot de passe</h3>
            </div>
        </div>



        <?php include("footer.php"); ?>
    </body>
</html>