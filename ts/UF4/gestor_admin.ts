
function mostrarAbiertas(){
    var xhttp = new XMLHttpRequest();


    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {

        var tabla = '<table class="table table-striped"><thead><tr><th>Id</th><th>Nombre</th><th>Incidencia</th><th>Estado</th><th>Añadir comentario y cerrar incidencia</th><th>Cerrar incidencia</th></tr></thead>';
        tabla += '<tbody>';

        document.getElementById("abiertas").innerHTML = tabla + this.responseText + '</tbody></table>' ;
      }
    };
    
    xhttp.open("GET", "consulta_abiertas.php", true);
    xhttp.send(null);

}

function mostrarCerradas(){
  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

      var tabla = '<table class="table table-striped"><thead><tr><th>Id</th><th>Nombre</th><th>Incidencia</th><th>Estado</th><th>Comentario</th></tr></thead>';
      tabla += '<tbody>';

      document.getElementById("cerradas").innerHTML = tabla + this.responseText + '</tbody></table>';
    }

  };
  
  xhttp.open("GET", "consultar_cerradas.php", true);
  xhttp.send();

}

function cerrar(id)
{
  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {

          alert("Incidencia cerrada correctamente");
          mostrarAbiertas();
          mostrarCerradas();
      }
    };

    xhttp.open("POST", "cerrar.php", true);
    xhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 
    xhttp.send("id=" + id + "& comentario=" + document.getElementById(id).value); 
    
}

  window.onload=function(){

    mostrarAbiertas();
    mostrarCerradas();

  }


  function comentario(id)
  {
    var area = document.getElementById(id);
    area.style.display = "inline";

    var boton = document.getElementById("b"+ id); 
    boton.style.display = "none";
  }


  function comentar(id)
  {
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          if(this.responseText == "")
          {
            var texto = "<p>No se ha incluido ningún comentario</p>";
            document.getElementById("modal").innerHTML = texto;
          }else{
            var texto = "<p> " + this.responseText + "</p>";
            document.getElementById("modal").innerHTML = texto;
          }
          
        }
      };
  
      xhttp.open("POST", "comentario.php", true);
      xhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 
      xhttp.send("id=" + id); 

  }