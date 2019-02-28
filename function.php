<?php

function getbdd(){
	$host = "localhost";
    $dbName = "luniver";
    $login = "admin";
    $password = "RATAL5";

    try
    {
        $bdd = new PDO('mysql:host='.$host.';dbname='.$dbName.';charset=utf8', $login, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch (Exception $e)
    {
        $bdd = null;
        die('Erreur : ' . $e->getMessage());
    }

    return $bdd;
}

function getVar($name) {
	if (isset ( $_GET [$name] )) {
		if (!empty ( $_GET [$name] )) {
			return $_GET [$name];
		}
		return TRUE;
	}
	return FALSE;
}

function postVar($name) {
	if (isset ( $_POST [$name] )) {
		if (!empty ( $_POST[$name] )) {
			return $_POST[$name];
		}
		return TRUE;
	}
	return FALSE;
}


