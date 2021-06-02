function crearTorneo(link) {
    var http = new XMLHttpRequest();
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("nom").value = '';
            document.getElementById("data").value = '';
            alert("Torneig insertt correctament");
        }
    };
    http.open("POST", link + "php/crearTorneo.php", true);
    http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    http.send("juego=" + document.getElementById("juego").value + "&nom=" + document.getElementById("nom").value + "&data=" + document.getElementById("data").value);
}
function cargar_update(link) {
    var http = new XMLHttpRequest();
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("torneos").innerHTML = this.responseText;
        }
    };
    alert("aaa");
    http.open("GET", link + "php/selectTorneos.php", true);
    http.send(null);
}
