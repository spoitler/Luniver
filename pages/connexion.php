<?php

    session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>LUNIVER</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="/css/style.css">
    </head>
    <body>
    <?php include("menu.php"); ?>
    <!-- multistep form -->
    <form action="connexionbdd.php" method="post" class="msform form_inscription">
        <fieldset>
            <h2 class="fs-title">Connexion</h2>
            <input type="email" name="email" placeholder="Email" required/>
            <input type="password" name="password" placeholder="Mot de passe" required/>
        </fieldset>
        <div id="submit_inscription">
            <button type="submit" name="submit" class="submit action-button" value="Submit">Submit</button>
            <p><a href="inscription.php">Je n'ai pas encore de compte</a></p>
        </div>
    </form>
    <?php include("footer.php"); ?>
    </body>
</html>