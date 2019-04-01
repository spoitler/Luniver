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

    $query = "SELECT email, password FROM client WHERE email=:email";

    $verification = $bdd->prepare($query);
    $verification->bindParam(":email", $email);
    $verification->execute();
    $resultat = $verification->fetch();

    $passwordCorrect = hash("sha3-512",$password);

    if ($passwordCorrect) {
        echo "connecté";
        header('Location: recupdonneeperso.php');
    }

}