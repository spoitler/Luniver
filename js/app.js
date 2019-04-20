(function ($) {

    var btnCart = document.querySelector('.btn-add-to-cart');
    var btnCartText = document.querySelector('.btn-add-to-cart__text');
    var bool = true;

        $('.addPanier').click(function (event) {
            event.preventDefault();


            var quantite = document.getElementById("input_quantite_produit").value;

            var regex = /[.,]/g;
            var taille = quantite.search(regex);
            var autre = quantite[quantite.search(regex)];
            var nombre = quantite.slice(0, taille);
            if (autre !== "." && autre !== ",") {
                if (document.getElementById("input_quantite_produit").value === "" || document.getElementById("input_quantite_produit").value <= 0) {
                    alert("veuillez séléctionner une quantite valide");

                } else {
                        if (bool) {
                            btnCart.classList.toggle('btn-add-to-cart-validate');
                            btnCartText.innerHTML = 'Ajouté au panier!';
                            $.get($(this).attr('href'), {quantite : document.getElementById("input_quantite_produit").value}, function (data) {
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

        $('.quantite_panier').change(function () {
            var quantitePanier = document.getElementById("input_quantite_produit").value;
            $("").empty().append(quantitePanier);
            alert(quantitePanier);
        });

})(jQuery);