window.onload = function() {

    mostrarDatos();

  };


function mostrarDatos(){

    var cont = parseInt(localStorage.getItem("cont"));
 
    for (let i = 0; i < cont; i++) 
    {
    // Crear div
        var noticia = document.createElement("DIV");
        document.getElementById("noticias").appendChild(noticia);
        document.getElementById("noticias").getElementsByTagName("DIV")[i].setAttribute("id", "" + i);

    // Crear p
        var titulo = document.createElement("P");
        document.getElementById("" +i).appendChild(titulo);

    // Crear a
        var titulo_a = document.createElement("A");
        var noticia_aux =JSON.parse(localStorage.getItem(""+i));
        var titulo_text = document.createTextNode(noticia_aux.data + " - " + noticia_aux.titulo);
        titulo_a.appendChild(titulo_text);
        document.getElementById("" + i).getElementsByTagName("P")[0].appendChild(titulo_a);
        document.getElementById("" + i).getElementsByTagName("a")[0].setAttribute("href", noticia_aux.link);
        console.log(JSON.parse(localStorage.getItem(""+ i)));

    // Crear expandir
        var expandir = document.createElement("P");
        var expandir_text = document.createTextNode("Expandir");
        expandir.appendChild(expandir_text);
        document.getElementById("" +i).appendChild(expandir);
        document.getElementById("" + i).getElementsByTagName("P")[1].setAttribute("Onclick", "more("+ i + ")");

    }

}


function more(noticia)
{
    var noticia_aux = JSON.parse(localStorage.getItem(""+ noticia));

    // Mostrar texto
    var contenido = document.createElement("P");
    var expandir_text = document.createTextNode(noticia_aux.contenido);
    contenido.appendChild(expandir_text);
    document.getElementById("" +noticia).appendChild(contenido);
    document.getElementById("" + noticia).getElementsByTagName("P")[1].setAttribute("hidden", "hidden");

    // Boton cerrar
    var cerrar = document.createElement("P");
    var cerrar_text = document.createTextNode("Cerrar");
    cerrar.appendChild(cerrar_text);
    document.getElementById("" +noticia).appendChild(cerrar);
    document.getElementById("" + noticia).getElementsByTagName("P")[3].setAttribute("Onclick", "cerrar("+ noticia + ")");

}

function cerrar(noticia)
{
    document.getElementById("" + noticia).getElementsByTagName("P")[1].removeAttribute("hidden");

    for (let i = 0; i < 2; i++) {
        document.getElementById("" + noticia).removeChild(document.getElementById("" + noticia).getElementsByTagName('p')[2]);

    }

}