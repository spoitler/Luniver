<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LUNIVER</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<!--    <link rel='stylesheet' href='https://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>-->
</head>
<body id="body">
    <?php include("function.php");
    include_once ("menu.php");

    $idProduit = getVar('id');
    $bdd = getbdd();
    $produit = getAllProduitById($bdd,$idProduit);
?>
    <div id="container_produit">
        <div id="previsu_img_produit">
            <p><img id="img_principale_produit" src="<?= $produit->image ?>"></p>
            <div id="mini_img_produit">
                <p><img src="<?= $produit->image; ?>"></p>
                <p><img src="<?= $produit->image; ?>"></p>
                <P><img src="<?= $produit->image; ?>"></P>
            </div>
        </div>
        <div id="info_produit">
            <h3><?= $produit->nom_produit; ?></h3>
            <p><?= $produit->prix; ?> €</p>
            <div id="quantite_produit">
               <p>Quantité</p>
                  <input id="input_quantite_produit" type="number" name="quantite" required>
            </div>
            <div id="taille_produit">
               <p>Taille </p>
               <div id="taille">
                  <div class="cont_taille_produit">
                      <input id="radioS" type="radio" name="radio" class="radio_taille_produit" value="S"/>
                      <label for="radioS" class="taille_produit">S</label>
                  </div>
                  <div class="cont_taille_produit">
                      <input id="radioM" type="radio" name="radio" class="radio_taille_produit" value="M"/>
                      <label for="radioM" class="taille_produit">M</label>
                  </div>
                  <div class="cont_taille_produit">
                      <input id="radioL" type="radio" name="radio" class="radio_taille_produit" value="L"/>
                      <label for="radioL" class="taille_produit">L</label>
                  </div>
               </div>
            </div>

            <input type="hidden" name="id" value='<?=$produit->id_produit; ?>'>

            <a href="addPanier.php?id=<?= $produit->id_produit; ?>" class="btn btn-add-to-cart addPanier">
               <div class="btn__content btn-add-to-cart__content">
                  <div class="icon-plus"></div>
                     <span class="btn-add-to-cart__icon-validate">
                        <span class="btn-add-to-cart__icon-validate-inside"></span>
                     </span>
                  <span class="btn-add-to-cart__text">Ajouter au panier</span>
               </div>
            </a>

            <div>
               <h4>Détails</h4>
               <div id="trait_detail_produit"></div>
               <p><?= $produit->description; ?></p>
               <p></p>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
</body>
</html>
