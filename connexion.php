<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>A Propos</title>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    <body>
        <div class="container">
            <div class="login">
                <h1>Login</h1>
                <form action="validation.php" method="post">
                    <input type="text" name="login" placeholder="login" required="required" />
                    <input type="password" name="password" placeholder="password" required="required" />
                    <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
                </form>
            </div>
        </div>
    </body>
</html>


<?php
// On définit un login et un mot de passe de base pour tester notre exemple. Cependant, vous pouvez très bien interroger votre base de données afin de savoir si le visiteur qui se connecte est bien membre de votre site
$login_valide = "root";
$pwd_valide = "123";

// on teste si nos variables sont définies
if (isset($_POST['login']) && isset($_POST['password'])) {

    // on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
    if ($login_valide == $_POST['login'] && $pwd_valide == $_POST['password']) {
        // dans ce cas, tout est ok, on peut démarrer notre session

        // on la démarre :)
        //session_start ();
        // on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['password'] = $_POST['password'];

        // on redirige notre visiteur vers une page de notre section membre
        header ('location: contact.php');
    }
    else {
        // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
        echo '<body onLoad="alert(\'Pseudo ou mot de passe incorrect\')">';
        // puis on le redirige vers la page d'accueil
        echo '<meta http-equiv="refresh" content="0;URL=login.php">';
    }
}
else {
    echo 'Les variables du formulaire ne sont pas déclarées.';
}
?>