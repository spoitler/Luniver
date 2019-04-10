<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>LUNIVER</title>
    </head>
    <body>
    <?php include("function.php");
    include_once ("menu.php");
    ?>

    </body>
    </html>

<?php

$email = postVar("email");
$password = postVar("password");

if ($email && $password){
    $bdd = getbdd();

    echo "connecté a la bdd<br>";

    $query = "SELECT email,Admin, password FROM client WHERE email=:email";

    $verification = $bdd->prepare($query);
    $verification->bindParam(":email", $email);
    $verification->execute();
    $resultat = $verification->fetch();

    $passwordCorrect = hash("sha512",$password);
    $passwordbdd = $resultat['password'];

    if ($passwordCorrect == $passwordbdd) {
        echo "connecté";
        $_SESSION['email'] = $email;
        $_SESSION['type'] = $resultat['Admin'];
        //header('Location: recupdonneeperso.php');
        header('Location: index.php');
    }else{
        echo "t'es nul";
    }

}