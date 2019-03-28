<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Affichage des livres</title>
    <?php
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
            <th width="120">Nom</th>
            <th width="120">Prénom</th>
            <th width="160">Date de naissance</th>
            <th width="230">Email</th>
            <th width="90">Sexe</th>
            <th width="210">Adresse</th>
            <th width="110">Telephone</th>
            <th width="110">Ville</th>
            <th width="110">Code postal</th>
        </tr>
        </thead>
        <tbody>
        <?php
        // objet "$publishers" valide ?
        if ($clients) {
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
                            <a class="btn btn-danger btn-sm" href="delPub.php?id=<?=$client->idClient?>">
                                <i class="fa fa-trash-alt" aria-hidden="true"></i>&nbsp;Supprimer</a>
                        </td>
                </tr>
                <?php
            }
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
