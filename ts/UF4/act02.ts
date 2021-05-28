
    
function cargarPalabra() {
    var http = new XMLHttpRequest();
    http.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        mispalabras(this);
      }
    };
    http.open("POST", "http://localhost/completarPalabras.php", true);
    http.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 
    http.send(null);
  }
  
  function mispalabras(xml) {
    var resultado="";
    var xmlDoc = xml.responseXML;
    var x = xmlDoc.getElementsByTagName("palabra");
    for (var i = 0; i <x.length; i++) { 
        resultado +="<p>"+x[i].getElementsByTagName("nombre")[0].childNodes[0].nodeValue +
        "</p>";
    }
  
    document.getElementById("palabras").innerHTML = resultado;
  }
  
