function rankingFIFA(link){
    var http = new XMLHttpRequest();
    http.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          document.getElementById("tabla").innerHTML = this.responseText;
      }
};
alert ("aaa");
http.open("GET", link + "php/rankingTorneos.php", true);
http.send(null);
}




function rankingLOL(link){
    var http = new XMLHttpRequest();
    http.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          document.getElementById("tabla").innerHTML = '<tr class="top_tabla"><td>Puesto</td><td>Nombre de usuario</td><td>Puntuación</td></tr>'  + this.responseText;
      }
};
alert ("hola");
http.open("GET", link + "php/rankingTorneos.php", true);
http.send(null);
}