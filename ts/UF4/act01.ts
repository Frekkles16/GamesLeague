
    
function cargar() {
    var http = new XMLHttpRequest();
    http.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        misrecetas(this);
      }
    };
    http.open("GET", "http://localhost/cargaProvinciasXML.php", true);
    http.send(null);
  }
  
  function misrecetas(xml) {
    var resultado="";
    var xmlDoc = xml.responseXML;
    var x = xmlDoc.getElementsByTagName("provincia");
    for (var i = 0; i <x.length; i++) { 
        resultado +="<option value='" +
        x[i].getElementsByTagName("codigo")[0].childNodes[0].nodeValue +
        "'>"+
        x[i].getElementsByTagName("nombre")[0].childNodes[0].nodeValue +
        "</option>";
    }
  
    document.getElementById("provincia").innerHTML = resultado;
  }
  

  function cargar2()
  {
    
    var http = new XMLHttpRequest();
    http.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        console.log(this.responseXML);
        municipios(this);
      }
    };
    http.open("POST", "http://localhost/cargaMunicipiosXML.php", true);
    http.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 
    http.send("provincia=" + document.getElementById("provincia").value);
}
  function municipios(xml) {
    var resultado="";
    var xmlDoc = xml.responseXML;
    var x = xmlDoc.getElementsByTagName("municipio");
    for (var i = 0; i <x.length; i++) { 
        resultado +="<option value='" +
        x[i].getElementsByTagName("codigo")[0].childNodes[0].nodeValue +
        "'>"+
        x[i].getElementsByTagName("nombre")[0].childNodes[0].nodeValue +
        "</option>";
    }
  
    document.getElementById("municipio").innerHTML = resultado;
  }