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

function getAllClient(PDO $bdd, $email) {
    // La requete de base
    $query = "SELECT idClient,nom_client, prenom_client, date_naissance, email, sexe, adresse, telephone, ville, code_postal FROM client WHERE email=:email";
    // On récupère tout le contenu de la table

    $resultat = $bdd->prepare($query);

    $resultat->bindParam(":email", $email);

    $resultat->execute();

    return $resultat->fetch(PDO::FETCH_OBJ);

}

function getAllClientById(PDO $bdd, $idClient) {
    // La requete de base
    $query = "SELECT nom_client, prenom_client, date_naissance, email, sexe, adresse, telephone, ville, code_postal FROM client WHERE idClient=:idclient";
    // On récupère tout le contenu de la table

    $resultat = $bdd->prepare($query);

    $resultat->bindParam(":idclient", $idClient);

    $resultat->execute();

    return $resultat->fetch(PDO::FETCH_OBJ);

}

function getClients(PDO $bdd) {
    // La requete de base
    $query = "SELECT idClient,nom_client, prenom_client, date_naissance, email, sexe, adresse, telephone, ville, code_postal FROM client";

    // Etape 1
    $resultat = $bdd->prepare($query);
    // Etape 2
    $resultat->execute();


    return $resultat->fetchAll(PDO::FETCH_OBJ);
}

