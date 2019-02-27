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
    <?php include("function.php"); ?>
</body>
</html>

<?php

$nom = postVar("lname");
$prenom = postVar("fname");
$date_naissance = postVar("date_naissance");
$email = postVar("email");
$password = postVar("pass");
$cpassword = postVar("cpass");
$telephone = postVar("phone");
$adresse = postVar("adresse");
$ville = postVar("ville");
$postalc = postVar("postalc");

if ( $nom && $prenom && $email && $password && $cpassword && $telephone && $adresse && $ville && $postalc)
{
    $bdd = getbdd();

    echo "connecté";

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO client(nom_client, prenom_client, date_naissance, civilite, adresse, telephone, ville, code_postal, password) VALUES (:nom,:prenom,:date_naissance,:civilite,:adresse,:telephone,:ville,:postalc,:password)";



    $result = $bdd->prepare($query);

    $result->bindParam(":nom", $nom);
    $result->bindParam(":prenom", $prenom);
    $result->bindParam(":date_naissance", $date_naissance);
    $result->bindParam(":email", $email);
    $result->bindParam(":password", $password);



}


