<?php
session_start();

if (isset($_GET['qty'])) {
   $_SESSION['panier'][$_GET['id']]['quantite'] = (int) $_GET['qty'];
}elseif (isset($_GET['taille'])) {
   $_SESSION['panier'][$_GET['id']]['taille'] = $_GET['taille'];
}
