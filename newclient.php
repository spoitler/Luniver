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

$nom = postVar("nom");
$prenom = postVar("prenom");
$date_naissance = postVar("date_naissance");
$email = postVar("email");
$password = postVar("password");
$telephone = postVar("telephone");
$adresse = postVar("adresse");
$ville = postVar("ville");
$postalc = postVar("postalc");
$sexe = postVar("sexe");


if ($nom && $prenom && $date_naissance && $email && $password && $telephone && $adresse && $ville && $postalc && $sexe)
{
    $bdd = getbdd();
    echo "connecté";

    $password = hash("sha512",$password);

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

    if ($_SESSION['type'] == "admin"){
        header('Location: listeClient.php');
    }else{
        $_SESSION['email'] = $email;
        header('Location: index.php');
    }


}