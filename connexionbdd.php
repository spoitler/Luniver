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

    if ($email && $password){
        $bdd = getbdd();

        echo "connecté a la bdd<br>";

        $query = "SELECT email,password FROM client ";

        $verification = $bdd->prepare($query);
        $verification->bindParam(":email", $email);
        $verification->execute();
        $resultat = $verification->fetch();
        $passwordCorrect = password_verify($password, $resultat['password']);

        if ($passwordCorrect && $email == $resultat['email']){
            echo "connecté";
            header('Location: index.php');
        }else{
            echo "Identifiant ou mot de passe invalid";
            header('Location: connexion.php');
        }


}