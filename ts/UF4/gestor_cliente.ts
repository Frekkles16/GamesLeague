

function mostrar(){
    var xhttp = new XMLHttpRequest();


    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {

        var tabla = '<table class="table table-striped"><thead><tr><th>Id</th><th>Nombre</th><th>Incidencia</th><th>Estado</th><th>Comentario</th></tr></thead>';
        tabla += '<tbody>';   

        document.getElementById("mostrar").innerHTML = tabla + this.responseText + '</tbody></table>' ;
      }

    };
    
    xhttp.open("GET", "consulta.php", true);
    xhttp.send();


  }

  function crear()
  {
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
  
            alert("Incidencia enviada correctamente");
            mostrar();
          
        }
  
      };
      
      xhttp.open("POST", "insertar.php", true);
      xhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 
      xhttp.send("nombre=" + document.getElementById("nombre").value + "& incidencia=" + document.getElementById("incidencia").value);
      
  }


  window.onload=function(){

    mostrar();

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