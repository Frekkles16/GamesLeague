var longitud;
var latitud;


function iniciar(){
  window.setInterval(getLocation, 60000);
  getLocation();
    
}

function getLocation() {
    var x = document.getElementById("mapa");
    var inicio = document.getElementById('inicio');
    if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
    inicio.style.display= 'none';
    } else {
    alert("no hay geo");
    var info = document.getElementById('info');
    info.style.display= 'block';
    x.innerHTML = "Geolocalización desactivada";
    bbdd();
    longitud = null;
    latitud = null;
    }
}

   function showPosition(position) 
   {
    var mapa = document.getElementById("mapa");
    var nom = document.getElementById("user").value;
    latitud = position.coords.latitude;
    longitud = position.coords.longitude;
    mapa.innerHTML = "<strong>Nombre:</strong> " + nom + "<br><strong>Latitud:</strong> " + position.coords.latitude + "<br><strong>Longitud:</strong> " + position.coords.longitude;
    bbdd();
}


   function bbdd()
   {
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          if(this.responseText == "0")
          {
            insert();
          }else{
            update();
          }
          
        }
      };

      let nombre =  document.getElementById('user').value;
  
      xhttp.open("POST", "select.php", true);
      xhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 
      xhttp.send("nombre=" + nombre); 

   }

   function insert()
   {

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          alert("Inertado correctamente");
          
        }
    };

      let nombre =  document.getElementById('user').value;
  
      xhttp.open("POST", "insert.php", true);
      xhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 
      xhttp.send("nombre=" + nombre + "& longitud=" + longitud + "& latitud=" + latitud); 
   
   }

   function update()
   {

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) { 
          console.log("Actualizado");
        }
    };

      let nombre =  document.getElementById('user').value;
      console.log(nombre);
  
      xhttp.open("POST", "update.php", true);
      xhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 
      xhttp.send("nombre=" + nombre + "& longitud=" + longitud + "& latitud=" + latitud); 

   }