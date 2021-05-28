function cargar(link) {
    var http = new XMLHttpRequest();
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('t_jugados').innerHTML = this.responseText;
            cargar_partidas(link, document.getElementById("juego").value);
        }
    };
    http.open("POST", link + "php/total_torneos.php", true);
    http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    http.send("juego=" + document.getElementById("juego").value);
}
function cargar_partidas(link, juego) {
    var http = new XMLHttpRequest();
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('p_jugadas').innerHTML = this.responseText;
            cargar_v_torneos(link, juego);
        }
    };
    http.open("POST", link + "php/total_partidas.php", true);
    http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    http.send("juego=" + juego);
}
function cargar_v_torneos(link, juego) {
    var http = new XMLHttpRequest();
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('torneos_w').innerHTML = this.responseText;
            cargar_v_partidas(link, juego);
        }
    };
    http.open("POST", link + "php/total_victorias_t.php", true);
    http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    http.send("juego=" + juego);
}
function cargar_v_partidas(link, juego) {
    var http = new XMLHttpRequest();
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('partidas_w').innerHTML = this.responseText;
        }
    };
    http.open("POST", link + "php/total_victorias_p.php", true);
    http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    http.send("juego=" + juego);
}
