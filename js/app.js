(function ($) {
    var btnCart = document.querySelector('.btn-add-to-cart');
    var btnCartText = document.querySelector('.btn-add-to-cart__text');
    var bool = true;

        $('.addPanier').click(function (event) {
            event.preventDefault();
            var tailleT = "";

            var quantite = document.getElementById("input_quantite_produit").value;

            if ($('#radioS').is(':checked')) {
               tailleT = "S";
            }else if ($('#radioM').is(':checked')) {
               tailleT = "M";
            }else if ($('#radioL').is(':checked')) {
               tailleT = "L";
            }else {
               tailleT = "-1";
            }

            var regex = /[.,]/g;
            var taille = quantite.search(regex);
            var autre = quantite[quantite.search(regex)];
            var nombre = quantite.slice(0, taille);
            if (autre !== "." && autre !== ",") {
                if ( tailleT == "-1" || document.getElementById("input_quantite_produit").value === "" || document.getElementById("input_quantite_produit").value <= 0) {
                   if (tailleT == "-1" && document.getElementById("input_quantite_produit").value != "" || document.getElementById("input_quantite_produit").value > 0) {
                      alert("Veuillez séléctionner une taille");
                   }else {
                      alert("veuillez séléctionner une taille et/ou une quantite valide");
                  }
                } else {
                        if (bool) {
                            btnCart.classList.toggle('btn-add-to-cart-validate');
                            btnCartText.innerHTML = 'Ajouté au panier!';
                            $.get($(this).attr('href'), {quantite : quantite,taille : tailleT}, function (data) {
                                $("#count").empty().append(data.count);
                                $("#img_shopping_cart").attr('src', 'img/shopping-cart.png');
                            }, "json");
                        }
                        bool = false;
                }
            }else {
                alert("veuillez séléctionner une quantite valide");
            }
            return false;
        });

})(jQuery);
