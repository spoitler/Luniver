function updateTaillePanier(id,taille) {
    var httpRequestTaille = false;

   httpRequestTaille = new XMLHttpRequest();

    if (!httpRequestTaille) {
        alert('Abandon :( Impossible de créer une instance XMLHTTP');
    }

    httpRequestTaille.onreadystatechange = function (){
        if (httpRequestTaille.readystate === 4){
            document.getElementById('result').innerHTML = httpRequestTaille.responseText
        }
    };

   httpRequestTaille.open('GET','quantitePanier.php?id='+ id +'&taille='+taille, true);
   httpRequestTaille.send();

   $.get('updatePanier.php', {id : id,taille : taille}, function (data) {
   }, "json");
}
