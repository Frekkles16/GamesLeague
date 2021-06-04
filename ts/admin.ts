

function crearTorneo(link)
{
    var http = new XMLHttpRequest();
    http.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("nom").value = '';
        document.getElementById("data").value  = '';
        alert("Torneig insertat correctament");

      }
    };
    http.open("POST", link + "php/crearTorneo.php", true);
    http.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    http.send("juego=" + document.getElementById("juego").value + "&nom=" + document.getElementById("nom").value + "&data=" + document.getElementById("data").value);
}

function cargar_update(link)
{
    var http = new XMLHttpRequest();
    http.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        const text = '<option value="0" class="">Selecciona:</option>' + this.responseText;
        document.getElementById("torneos").innerHTML = text;
      }
    };

    http.open("GET", link + "php/selectTorneos.php", true);
    http.send(null);
}

function datos_update(link)
{
    var http = new XMLHttpRequest();
    http.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var text = this.responseText.split(',');
        document.getElementById('u_nom').value = text[0];
        document.getElementById('u_data').value = text[1];
        document.getElementById('u_juego').value = text[2];
      }
    };
    http.open("POST", link + "php/datosTorneo.php", true);
    http.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    http.send("id=" + document.getElementById('torneos').value);
}


function cargar_eliminar(link)
{
    var http = new XMLHttpRequest();
    http.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        const text = '<option value="0" class="">Selecciona:</option>' + this.responseText;
        document.getElementById("torneos_eliminar").innerHTML = text;
      }
    };

    http.open("GET", link + "php/selectTorneos.php", true);
    http.send(null);
}

function eliminarTorneo(link)
{
    var http = new XMLHttpRequest();
    http.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        alert("Torneig eliminat correctament");
      }
    };
    http.open("POST", link + "php/deleteTorneo.php", true);
    http.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    http.send("id=" + document.getElementById('torneos_eliminar').value);
}

function crearAdmin(link)
{
    var http = new XMLHttpRequest();
    http.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("user").value = '';
        document.getElementById("passw").value  = '';
        document.getElementById("passw2").value  = '';
        alert("Administrador creat correctament");

      }
    };
    http.open("POST", link + "php/crearAdmin.php", true);
    http.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    http.send("user=" + document.getElementById("user").value + "&passw=" + document.getElementById("passw").value);
}


function cargar_torneos_validar(link)
{
  var http = new XMLHttpRequest();
  http.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      const text = '<option value="0" class="">Selecciona:</option>' + this.responseText;
      document.getElementById("torneos_v").innerHTML = text;
    }
  };

  http.open("GET", link + "php/selectTorneos.php", true);
  http.send(null);
}

function datos_partidas(link)
{
  var http = new XMLHttpRequest();
    http.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById('foto').innerHTML = this.responseText;

        users_partida(link, document.getElementById('tipo_partida').value, document.getElementById('torneos_v').value);
      }
    };
    http.open("POST", link + "php/datosPartida.php", true);
    http.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    http.send("tipo=" + document.getElementById('tipo_partida').value + "&torneo=" + document.getElementById('torneos_v').value);
}

function users_partida(link, tipo, torneo)
{
  var http = new XMLHttpRequest();
    http.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById('users_partida').innerHTML = this.responseText;
      }
    };
    http.open("POST", link + "php/usersPartida.php", true);
    http.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    http.send("tipo=" + tipo + "&torneo=" + torneo);
}

function validado(link)
{
  var http = new XMLHttpRequest();
    http.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById('users_partida').innerHTML = this.responseText;
      }
    };
    alert("aaa");
    http.open("POST", link + "php/validado.php", true);
    http.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    http.send("ganador=" + document.getElementById('users_partida').value + "&torneo=" + document.getElementById('torneos_v').value + "&tipo=" + document.getElementById('tipo_partida').value);
}