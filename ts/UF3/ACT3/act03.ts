
function info(etiqueta){
    console.log(document.getElementsByTagName(etiqueta));
    eliminar_to(document.getElementById('info').getElementsByTagName('h5').length);
    var num_etiquetas = document.getElementsByTagName(etiqueta).length;
    for(var i=0; i<num_etiquetas;i++)
    {
        var etiqueta_abrir = document.createElement("h5");
        var text = document.createTextNode(i + ". " + document.getElementsByTagName(etiqueta)[i].textContent
         + " - Es invisible? " + document.getElementsByTagName(etiqueta)[i].hidden );
        etiqueta_abrir.appendChild(text);
        document.getElementById("info").appendChild(etiqueta_abrir);

    }
    

}

function eliminar_to(cont)
{   
    for(var j=0; j < cont;j++)
    {
        document.getElementById('info').removeChild(document.getElementsByTagName('h5')[0]);
    }
   
}