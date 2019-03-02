<?php

session_start();

?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>LUNIVER</title>
    </head>
    <body>
    <?php include("function.php"); ?>

    </body>
    </html>

<?php

$email = postVar("email");
$password = postVar("password");

$_SESSION['email'] = $email;

if ($email && $password){
    $bdd = getbdd();

    echo "connecté a la bdd<br>";

    $query = "SELECT email, password FROM client ";

    $verification = $bdd->prepare($query);
    $verification->bindParam(":email", $email);
    $verification->execute();
    $resultat = $verification->fetch();
    $passwordCorrect = password_verify($password, $resultat['password']);

    if ($passwordCorrect && $_SESSION['email'] == $resultat['email']) {
        echo "connecté";
        header('Location: donnees_personnel.php');
    }

}