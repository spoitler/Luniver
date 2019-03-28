<!DOCTYPE html>
<html>
    <head>
        <title>Edition d'un éditeur</title>
        <?php
        include_once ("../header/header.inc.html");
        include_once ("function.php");
        ?>
    </head>
    <body>



    <?php
    $idClient = postVar('id');
    $nom = postVar("lname");
    $prenom = postVar("fname");
    $date_naissance = postVar("date_naissance");
    $email = postVar("email");
    $telephone = postVar("phone");
    $adresse = postVar("adresse");
    $ville = postVar("ville");
    $postalc = postVar("postalc");
    $sexe = postVar("sexe");

   if (!empty ($idClient)){

       $bdd = getbdd();
       $query = "UPDATE client SET nom_client=:nom, prenom_client=:prenom,date_naissance=:naissance,email=:email,sexe=:sexe,adresse=:adresse,telephone=:telephone,ville=:ville,code_postal=:postalc WHERE 1";

       $resultat = $bdd->prepare($query);

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
   }

   header("location: listePubrecherche.php");







    ?>
    </body>
</html>