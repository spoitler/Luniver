<?php
function bdd(){
	$host = "localhost";
    $dbName = "luniver";
    $login = "root";
    $password = "";

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

function requete($query){
	try {
		$bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	} catch (Exception $e) {
		die("Erreur = " . $e->getMessage());

	}
	$result = $bdd->query($query);
	return $result;
}

function recupLivre($idlivre){

	$requete = "SELECT *,left(desc_livre,500) FROM livre,auteur where ID_livre=$idlivre and livre.ID_auteur=auteur.ID_auteur";
	$recuplivre = requete($requete);
	$resultat = $recuplivre->fetch();
	$phrase  = $resultat[1];
	$original = array("é", "à", "ê", "ë", "ï", "î");
	$nouveau   = array("e", "a", "e", "e", "i", "i");
	$resultat[1] = str_replace($original, $nouveau, $phrase);

	$resultat[1] = strtoupper($resultat[1]);
	$resultat[10] = strtoupper($resultat[10]);
	$resultat[9] = strtoupper($resultat[9]);

	return $resultat;
}

function afficheLivre($ligne, $resultat){


	?><div class="container">
		<div class="slideshow">
			<a href="#">
				<img class="bg-img" src="<?php echo $ligne[5]; ?>">
				<ul id="siContent2">
					<h3 id="si2"><strong><?php echo $ligne[1];?></strong></h3>
					<h3 id="si3"><strong><?php echo $ligne[10] . " " . $ligne[9];?></strong></h3>
					<img class="img-book" id="si4" src="<?php echo $ligne[5]; ?>">
				</ul>
				<ul id="sContent2">
					<div class="text-container2">
						<h3><strong><?php echo $ligne[1];?></strong></h3>
						<h3><strong><?php echo $ligne[10] . " " . $ligne[9];?></strong></h3>
						<h4><?php echo "$resultat[0]..."; ?></h4>
					</div>
				</ul>
			</a>
		</div>
	</div>
	<?php
}


?>
