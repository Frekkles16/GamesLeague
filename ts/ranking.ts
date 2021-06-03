
var ranking = "lol";

function load_ranking(link){
    ranking = ranking === "fifa" ? "lol" : "fifa";
 
    const url = ranking === "fifa" ? "rankingFIFA" : "rankingTorneos";
    var http = new XMLHttpRequest();
    http.onreadystatechange = function() {
      if (this.readyState === 4 && this.status === 200) {
          document.getElementById("tabla").innerHTML = '<tr class="top_tabla"><th>Puesto</th><th>Nom usuari</th><th>Puntuación</th></tr>'  + this.responseText;
          console.log(this.responseText);
          if (url == "rankingFIFA"){
          
            document.getElementById("nombre").innerHTML = "FIFA";
          }
          else{
           
            document.getElementById("nombre").innerHTML = "LOL";
          }
      }
    };
    http.open("GET", link + "php/" + url + ".php", true);
    http.send(null);  

}