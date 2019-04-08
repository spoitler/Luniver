<!DOCTYPE html>
<html>
    <head>
        <title>Edition d'un éditeur</title>
        <?php
        include_once ("menu.php");
        include_once ("../header/header.inc.html");
        include_once ("function.php");
        ?>
    </head>
    <body>



    <?php
    $id = postVar("id");
    $nom = postVar("nom");
    $prenom = postVar("prenom");
    $date_naissance = postVar("date_naissance");
    $email = postVar("email");
    $telephone = postVar("telephone");
    $adresse = postVar("adresse");
    $ville = postVar("ville");
    $postalc = postVar("postalc");
    $sexe = postVar("sexe");

    if ($nom && $prenom && $date_naissance && $email && $telephone && $adresse && $ville && $postalc && $sexe){

       $bdd = getbdd();
       $query = "UPDATE client SET nom_client=:nom, prenom_client=:prenom,date_naissance=:naissance,email=:email,sexe=:sexe,adresse=:adresse,telephone=:telephone,ville=:ville,code_postal=:postalc WHERE idClient=:id";

       $resultat = $bdd->prepare($query);

       $resultat->bindParam(":id", $id);
       $resultat->bindParam(":nom", $nom);
       $resultat->bindParam(":prenom", $prenom);
       $resultat->bindParam(":naissance", $date_naissance);
       $resultat->bindParam(":email",$email);
       $resultat->bindParam(":sexe",$sexe);
       $resultat->bindParam(":adresse",$adresse);
       $resultat->bindParam(":telephone",$telephone);
       $resultat->bindParam(":ville",$ville);
       $resultat->bindParam(":postalc",$postalc);

       $resultat->execute();
    }else{
       echo "erreur !";
    }

    if ($_SESSION['type'] == "admin"){
        header('Location: listeClient.php');
    }else{
        header('Location: recupdonneeperso.php');
    }

    ?>
    </body>
</html>