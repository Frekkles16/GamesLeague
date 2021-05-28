
var li = 0;


window.onload = function() {

    restaurar();

  };


function crear_lista(){

    var lista = document.createElement("LI");
    var text = document.createTextNode("Primer Element");
    lista.appendChild(text);
    document.getElementById("lista").appendChild(lista);

    lista = document.createElement("LI");
    var text = document.createTextNode("Segon Element");
    lista.appendChild(text);
    document.getElementById("lista").appendChild(lista);

    lista = document.createElement("LI");
    var text = document.createTextNode("Tercer Element");
    lista.appendChild(text);
    document.getElementById("lista").appendChild(lista);
    li=3;
}

function eliminar_todo()
{   
    for(var i=0; i < li;i++)
    {
        document.getElementById('lista').removeChild(document.getElementsByTagName('li')[0]);
    }
    li=0;
}


function insert_final()
{
    var lista = document.createElement("LI");
    var text = document.createTextNode("Adios Marcos");
    lista.appendChild(text);
    document.getElementById("lista").appendChild(lista);
    li++;
}

function insert_inicio()
{
    var lista = document.createElement('LI');
    var text = document.createTextNode("Hola Marcos");
    lista.appendChild(text);
    var primero = document.getElementById('lista').getElementsByTagName('li')[0];
    document.getElementById('lista').insertBefore(lista,primero);
    li++;
}

function restaurar()
{
    eliminar_todo();
    crear_lista();
}

