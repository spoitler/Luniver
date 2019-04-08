<!DOCTYPE html>
<html>
<head>
    <title>Affichage des livres</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css">
    <?php
    include_once ("menu.php");
    include_once ("../header/header.inc.html");
    include_once ("function.php");
    ?>
</head>

<body>

<h1>Liste des clients</h1>

<?php
// 1er : Connexion
$bdd = getbdd();

//
if ($bdd) {
    // connexion réussie
    $clients = getClients($bdd);

    ?>


    <table class="table table-striped table-hover table-bordered" width="75%">
        <thead>
        <tr>
            <th >Nom</th>
            <th >Prénom</th>
            <th >Date de naissance</th>
            <th >Email</th>
            <th >Sexe</th>
            <th >Adresse</th>
            <th >Telephone</th>
            <th >Ville</th>
            <th >Code postal</th>
            <th></th>

        </tr>
        </thead>
        <tbody>
        <?php
        // objet "$publishers" valide ?
        if ($clients) {
            $id = 0;
            foreach ($clients as $client) {
                // On affiche chaque entrée une à une
                ?>
                <tr>
                    <td><?=$client->nom_client?></td>
                    <td><?=$client->prenom_client?></td>
                    <td><?=$client->date_naissance?></td>
                    <td><?=$client->email?></td>
                    <td><?=$client->sexe?></td>
                    <td><?=$client->adresse?></td>
                    <td><?=$client->telephone?></td>
                    <td><?=$client->ville?></td>
                    <td><?=$client->code_postal?></td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="editClient.php?id=<?=$client->idClient?>">
                                <i class="fa fa-pencil-alt" aria-hidden="true"></i>&nbsp;Modifier</a>
                            <a class="btn btn-danger btn-sm" href="delClient.php?id=<?=$client->idClient?>">
                                <i class="fa fa-trash-alt" aria-hidden="true"></i>&nbsp;Supprimer</a>
                        </td>
                </tr><?php
                if ($id == 0){
                    $id = $client->idClient;
                }
            }?>
            <tr height="50px">
                <td colspan="10">
                   <a id="ajoutClient" class="btn btn-success btn-sm" href="ajoutClient.php?id=<?=$id?>"><i class="fas fa-plus" aria-hidden="true"></i>&nbsp;Ajouter</a>
                </td>
            </tr><?php
        }
        else {
            echo "<tr><td colspan='3'>Aucun résultat</td></tr>";
        }
        ?>
        </tbody>
    </table>
    <?php
}
?>

</body>
</html>
