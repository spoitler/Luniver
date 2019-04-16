<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LUNIVER</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">

</head>
<body id="body">
<?php include("function.php");
include_once ("menu.php");

$ids = array_keys($_SESSION['panier']);
//unset($_SESSION['panier'][3]);
$bdd = getbdd();
// La requete de base
$produits = getProduitsPanier($bdd,$ids);

?>

<div class="row">
    <div class="col-lg-12 mt-5">
        <div class="cardp">
            <div class="invoice-table table-responsive mt-5">
                <table class="table table-bordered table-hover text-right">
                    <thead>
                    <tr class="text-capitalize">
                        <th class="text-center row_table_panier" style="width: 10%;">produit</th>
                        <th class="text-left row_table_panier" style="width: 45%; min-width: 130px;">description</th>
                        <th class="row_table_panier">quantité</th>
                        <th class="row_table_panier" style="min-width: 100px">prix</th>
                        <th class="row_table_panier">total</th>
                    </tr>
                    </thead>
                    <tbody>
                   <?php
                        foreach ($produits as $produit){
                        ?>

                    <tr class="cont_produit">
                        <td class="text-center"><p><img class="img_panier" src="<?= $produit->image ?>" ></p></td>
                        <td id="nom_produit" class="text-left "><?= $produit->nom_produit ?></td>
                        <td class="details_produit"><p class="title_detail_produit text-capitalize">quantité</p><input id="input_quantite_produit" class="quantite_panier" type="number" value="<?= $_SESSION['panier'][$produit->id_produit] ?>"></td>
                        <td class="details_produit"><p class="title_detail_produit text-capitalize">prix</p><?= $produit->prix ?></td>
                        <td class="details_produit"><p class="title_detail_produit text-capitalize">total</p>$40</td>
                    </tr>
                        <?php }?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="4">total balance :</td>
                        <td>$140</td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>