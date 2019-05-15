<?php
session_start();

$_SESSION['panier'][$_GET['id']]['quantite'] = (int) $_GET['qty'];
