<?php
session_start();


if (!empty($_SESSION['email'])){
    header('Location: profil.php');
}else{
    header('Location: connexion.php');
}