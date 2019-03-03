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

$nom = postVar("lname");
$prenom = postVar("fname");
$date_naissance = postVar("date_naissance");
$email = postVar("email");
$password = postVar("password");
$telephone = postVar("phone");
$adresse = postVar("adresse");
$ville = postVar("ville");
$postalc = postVar("postalc");
$sexe = postVar("sexe");

if ($nom && $prenom && $date_naissance && $email && $password && $telephone && $adresse && $ville && $postalc && $sexe)
{
    $bdd = getbdd();

    echo "connecté";

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO client( nom_client, prenom_client, date_naissance, email, sexe, adresse, telephone, ville, code_postal, password) VALUES (:nom,:prenom,:date_naissance, :email, :sexe,:adresse,:telephone,:ville,:postalc,:password)";

    $result = $bdd->prepare($query);

    $result->bindParam(":nom", $nom);
    $result->bindParam(":prenom", $prenom);
    $result->bindParam(":date_naissance", $date_naissance);
    $result->bindParam(":email", $email);
    $result->bindParam(":password", $password);
    $result->bindParam(":telephone", $telephone);
    $result->bindParam(":adresse", $adresse);
    $result->bindParam(":ville", $ville);
    $result->bindParam(":postalc", $postalc);
    $result->bindParam(":sexe", $sexe);

    $result->execute();

    header('Location: index.php');


}