<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LUNIVER</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
<body id="body">
<?php include("function.php");

include_once ("menu.php");

$total = 0;

if (isset($_GET['del'])){
    unset($_SESSION['panier'][$_GET['del']]);
    header('Location: panier.php');
}

$ids = array_keys($_SESSION['panier']);
//unset($_SESSION['panier'][3]);
$bdd = getbdd();
$total = 0;
if (empty($ids)){
    $produits = array();
}else{
    // La requete de base
    $produits = getProduitsPanier($bdd,$ids);
}

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
                        <th class="row_table_panier">taille</th>
                        <th class="row_table_panier">quantité</th>
                        <th class="row_table_panier" style="min-width: 100px">prix</th>
                        <th class="row_table_panier">total</th>
                    </tr>
                    </thead>
                    <tbody>
                   <?php
                        if (empty($produits)){
                           echo '
                            <tr class="cont_produit">
                                <td colspan="5" class="text-center"><p>Le panier est vide.</p></td>
                            </tr>';
                        }else{
                            $idsP = "";
                            $prixP = "";

                            foreach ($produits as $produit){
                                $idsP = $idsP . $produit->id_produit.",";
                                $prixP = $prixP . $produit->prix.",";
                            }

                            foreach ($produits as $produit){

                             $total += ($produit->prix)*($_SESSION['panier'][$produit->id_produit]['quantite']);
                        ?>

                            <tr class="cont_produit">
                                <td class="text-center"><p><img class="img_panier" src="<?= $produit->image ?>" ></p></td>
                                <td id="nom_produit" class="text-left "><?= $produit->nom_produit ?></td>
                                <td class="details_produit"><p class="title_detail_produit text-capitalize">quantité</p>
                                   <select class="form-taille" onchange="updateTaillePanier(<?= $produit->id_produit ?>,this.value)">
                                      <?php if ($_SESSION['panier'][$produit->id_produit]['taille'] == "S") {
                                         echo "<option id='S<?= $produit->id_produit ?>' selected value='S'>S</option>
                                         <option id='M<?= $produit->id_produit ?>' value='M'>M</option>
                                         <option id='L<?= $produit->id_produit ?>' value='L'>L</option>";
                                      }elseif ($_SESSION['panier'][$produit->id_produit]['taille'] == "M") {
                                         echo "<option id='S<?= $produit->id_produit ?>' value='S'>S</option>
                                         <option id='M<?= $produit->id_produit ?>' selected value='M'>M</option>
                                         <option id='L<?= $produit->id_produit ?>' value='L'>L</option>";
                                      }elseif ($_SESSION['panier'][$produit->id_produit]['taille'] == "L") {
                                         echo "<option id='S<?= $produit->id_produit ?>' value='S'>S</option>
                                         <option id='M<?= $produit->id_produit ?>' value='M'>M</option>
                                         <option id='L<?= $produit->id_produit ?>' selected value='L'>L</option>";
                                      } ?>
                                   </select>
                                </td>
                                <td class="details_produit"><p class="title_detail_produit text-capitalize">quantité</p><input id="input_quantite_produit<?= $produit->id_produit ?>" class="quantite_panier" type="number" value="<?= $_SESSION['panier'][$produit->id_produit]['quantite'] ?>" onchange="updatePanier(<?= $produit->id_produit; ?>,this.value,<?= $produit->prix; ?>,'<?= $idsP ?>','<?= $prixP ?>')"></td>
                                <td class="details_produit"><p class="title_detail_produit text-capitalize">prix</p><?= $produit->prix ?> €</td>
                                <td class="details_produit"><p class="title_detail_produit text-capitalize">total</p><span id="prixProduitQuantite<?= $produit->id_produit;?>"><?= $produit->prix*$_SESSION['panier'][$produit->id_produit]['quantite'] ?></span> €</td>
                                <td ><a href="panier.php?del=<?= $produit->id_produit ?>"><i class="fas fa-trash"></i></a></td>
                            </tr>
                        <?php
                            }
                        }?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="4">prix total :</td>
                        <td><span id="prixTotalPanier"><?= $total ?></span> €</td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<div id=".result"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="js/updateQtyPanier.js"></script>
<script type="text/javascript" src="js/updateTaillePanier.js"></script>
</body>
</html>
