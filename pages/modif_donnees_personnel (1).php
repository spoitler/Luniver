<?php

session_start();

include("function.php");

if (empty($_SESSION['email'])){
    header("Location: connexion.php");
}else{

    $bdd = getbdd();

    $donnees = getAllClient($bdd, $_SESSION['email']);

}
?>
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
<?php include("menu.php"); 

//récupération des valeurs des champs:
$_SESSION['email'] = $email;
//nom:
$nom = $_POST["nom_client"] ;
//prenom:
$prenom = $_POST["prenom_client"] ;
//adresse:
$adresse = $_POST["adresse"] ;
//code postal:
$cp = $_POST["code_postal"] ;
//numéro de téléphone:
$tel = $_POST["telephone"] ;
//date de naissance:
$date_naissance = $_POST["date_naissance"];
//email:
$email = $_POST["email"];
//sexe:
$sexe = $_POST["sexe"];
//ville:
$ville = $_POST["ville"];
//password:
$password = $_POST["password"];


//création de la requête SQL:
$sql = "UPDATE client
SET nom_client = '$nom',
  prenom_client = '$prenom',
  date_naissance = '$date_naissance',
  email = '$email',
  sexe = '$sexe',
  adresse = '$adresse',
  telephone = '$tel',
  ville = '$ville',
  code_postal = '$cp'
  password = '$password'
           WHERE email = '$email' " ;

//exécution de la requête SQL:
$requete = mysql_query($sql, $bdd) or die( mysql_error() ) ;


//affichage des résultats, pour savoir si la modification a marchée:
if($requete)
{
    echo("La modification à été correctement effectuée") ;
}
else
{
    echo("La modification à échouée") ;
}
?>