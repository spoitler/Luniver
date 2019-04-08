<?php

include_once ("menu.php");

include("function.php");

if (empty($_SESSION['email'])){
    header("Location: connexion.php");
}else{

    $bdd = getbdd();

    $donnees = getAllClient($bdd, $_SESSION['email']);

   header("Location: donnees_personnel.php");
}
