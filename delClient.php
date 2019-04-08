<!DOCTYPE html>
<html>
<head>
    <title>Edition d'un éditeur</title>
    <?php
    include_once ("menu.php");
        include_once ("function.php");
    ?>
</head>
<body>



<?php
    $id = getVar('id');

    echo $id;

    if (!empty ($id)){

        $bdd = getbdd();
        $query = "DELETE FROM client WHERE idClient=:id";

        $resultat = $bdd->prepare($query);

        $resultat->bindParam(":id", $id);

        $resultat->execute();
    }

   header("location: listeClient.php");

?>
</body>
</html>