<?php

session_start();

include("function.php");

if (empty($_SESSION['email'])){
    header("Location: connexion.php");
}else{

    $bdd = getbdd();

    $donnees = getAllClient($bdd, $_SESSION['email']);

   header("Location: donnees_personnelle.php");
}
