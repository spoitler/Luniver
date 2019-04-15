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
?>

<div class="row">
    <div class="col-lg-12 mt-5">
        <div class="cardp">
            <div class="invoice-table table-responsive mt-5">
                <table class="table table-bordered table-hover text-right">
                    <thead>
                    <tr class="text-capitalize">
                        <th class="text-center" style="width: 10%;">produit</th>
                        <th class="text-left" style="width: 45%; min-width: 130px;">description</th>
                        <th>quantité</th>
                        <th style="min-width: 100px">prix</th>
                        <th>total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center"><img class="img_panier" src="img/produit1.jpg" ></td>
                        <td class="text-left">Crazy Toys</td>
                        <td>2</td>
                        <td>$20</td>
                        <td>$40</td>
                    </tr>
                    <tr>
                        <td class="text-center"><img class="img_panier" src="img/produit2.jpg" ></td>
                        <td class="text-left">Beautiful flowers</td>
                        <td>2</td>
                        <td>$50</td>
                        <td>$100</td>
                    </tr>
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