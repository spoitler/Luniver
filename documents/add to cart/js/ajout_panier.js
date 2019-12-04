var btnCart = document.querySelector('.btn-add-to-cart');
var btnCartText = document.querySelector('.btn-add-to-cart__text');
var bool = true;

btnCart.addEventListener('click', function (e) {
  e.preventDefault();
  btnCart.classList.toggle('btn-add-to-cart-validate');
  if (bool) {
    btnCartText.innerHTML = 'Ajouté au panier!';
  } else {
    btnCartText.innerHTML = 'Ajouter au panier';
  }
  bool = !bool;
});