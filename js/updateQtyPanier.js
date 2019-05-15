function updateTaille(taille){
   alert(taille);
}

function updatePanier(id,qty,prix,idsP,prixP) {
    var total = 0;
    var httpRequest = false;
    var quantite= "";
    var qtyPT = "";
    var nombre = 0;
    var j = 0;
    var regex = /[,]/g;
    var ids = idsP;
    var selecteur = "";
    var selecteurPrix = "";
    var nombrePrix = 0;
    var selecteurQty = "";
    var nombreQty = 0;
    var prixId = 0;

   httpRequest = new XMLHttpRequest();

    if (!httpRequest) {
        alert('Abandon :( Impossible de créer une instance XMLHTTP');
    }

    httpRequest.onreadystatechange = function (){
        if (httpRequest.readystate === 4){
            document.getElementById('result').innerHTML = httpRequest.responseText
        }
    };

    for(i=0; i < ids.length;i++){
      selecteur = ids.search(regex);
      nombre = ids.slice(0,selecteur);
      ids = ids.substr(selecteur+1);
      quantite = document.getElementById("input_quantite_produit"+nombre).value;
      qtyPT += quantite+",";
      httpRequest.open('GET','quantitePanier.php?id='+ nombre +'&qty='+quantite+'&prix='+prix+'&idsP='+idsP+'&prixP='+prixP, true);
      httpRequest.send();
      // console.log(nombre);
      // console.log(selecteur);
      // console.log(ids);
      // console.log(ids.length);

      j++;
      i=0;
   }
   // console.log(j);
   // console.log(qtyPT);


    for (var i = 0; i < j; i++){
      selecteur = idsP.search(regex);
      nombre = idsP.slice(0,selecteur);
      idsP = idsP.substr(selecteur+1);

      selecteurPrix = prixP.search(regex);
      nombrePrix = prixP.slice(0,selecteurPrix);
      prixId = nombrePrix;
      prixP = prixP.substr(selecteurPrix+1);

      selecteurQty = qtyPT.search(regex);
      nombreQty = qtyPT.slice(0,selecteurQty);
      qtyPT = qtyPT.substr(selecteurQty+1);

      total += Number(nombreQty) * Number(prixId);
    }

    // console.log(total);

    var regex = /[.,]/g;
    var taille = quantite.search(regex);
    var autre = quantite[quantite.search(regex)];
    var nombre = quantite.slice(0, taille);
    if (autre !== "." && autre !== ",") {
        if (document.getElementById("input_quantite_produit"+id).value === "" || document.getElementById("input_quantite_produit"+id).value <= 0) {
            alert("veuillez séléctionner une quantite valide");

        } else {
            $.get('updatePanier.php', {id : id,quantite : qty,prix : prix}, function (data) {
                $("#count").empty().append(data.count);
                $("#prixProduitQuantite"+id).empty().append(prix * qty);
                $("#prixTotalPanier").empty().append(total);


            }, "json");
        }
    }else {
        alert("veuillez séléctionner une quantite valide");
    }
}
