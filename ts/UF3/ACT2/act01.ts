
var errores= 0;
var cont = 0;
function comprobar()
{
    

    var nombre = document.getElementById("nombre").value;
    enBlanco(nombre);
    extraño(nombre);
    var apellido = document.getElementById("apellido").value;
    enBlanco(apellido);
    extraño(apellido);
    
    var lugar = document.getElementById("lugar").value;
    enBlanco(lugar);
    
    
    
    var hora = document.getElementById("hora").value;
    enBlanco(hora);
    extraño(hora);

    if(cont == 4 && errores == 0)
    {
        billete(nombre, apellido, lugar, hora);
    }else{
        alert("Por favor, rellena los campos y corectamente");
  
        cont=0; 
        errores=0;
    }

}


function enBlanco(variable)
{

    if(variable != "" && variable != null && variable != 0 && variable != undefined)
    {
        cont++;
    }
    
}

function extraño(variable)
{
    if(variable.includes("@") || variable.includes("+") || variable.includes("*"))
    {
        alert("No puedes incluir caracteres extraños")
        errores++;
    }
}




function billete(nombre, apellido, lugar, hora)
{
    document.getElementById("nombre2").innerHTML = nombre;
    document.getElementById("apellido2").innerHTML = apellido;
    document.getElementById("lugar2").innerHTML = lugar;
    document.getElementById("hora2").innerHTML = hora;

    var formulario = document.getElementById("formulario");
    formulario.style.cssText = 'display:none';


}