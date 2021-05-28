

var ticket = 0;



function setCookie(name: string, val: string)
{
    const date = new Date();
    const value = val;

    date.setTime(date.getTime() + (5 * 60 * 60 * 1000));

    document.cookie = name+"="+value+"; expires="+date.toUTCString()+"; path=/";
    
}


function getCookie(name: string)
{
    const value = "; " + document.cookie;
   // console.log("Value..." + value);

    const parts = value.split("; " + name + "=");
   // console.log("parts..." + parts);

    if  (parts.length == 2)
    {
        return parts.pop().split(";").shift();
    }
}

function guardar()
{
    var fondo = document.getElementById("fondo").value;
    var c_letra = document.getElementById("c_letra").value;
    var t_letra = document.getElementById("t_letra").value;
    var alineacion = document.getElementById("alineacion").value;
    var ancho = document.getElementById("ancho").value;
    var alto = document.getElementById("alto").value;


    setCookie("fondo", fondo);
    setCookie("c_letra", c_letra);
    setCookie("t_letra", t_letra);
    setCookie("alineacion", alineacion);
    setCookie("ancho", ancho);
    setCookie("alto", alto);
    alert("Estilos guardados");
}

window.onload = function(){

            var fondo = getCookie("fondo");
            var ancho = getCookie("ancho");
            var alto = getCookie("alto");
            var alineacion = getCookie("alineacion");
            var letracolor = getCookie("c_letra");
            var tipoletra = getCookie("t_letra");

            var imatge = document.getElementById("imagen");
            var texto = document.getElementById("texto");

            document.body.style.backgroundColor = fondo;

            texto.style.color = letracolor;
            texto.style.fontFamily = tipoletra;
            texto.style.textAlign = alineacion;
            imatge.style.height = alto;
            imatge.style.width = ancho;
        
}

function deshacer()
{
    var fondo = "";
    var c_letra = "";
    var t_letra = "";
    var alineacion = "";
    var ancho = "";
    var alto = "";


    setCookie("fondo", fondo);
    setCookie("c_letra", c_letra);
    setCookie("t_letra", t_letra);
    setCookie("alineacion", alineacion);
    setCookie("ancho", ancho);
    setCookie("alto", alto);
    alert("Estilos guardados");
}


/*window.onload = function () {
    

    if




    ticket = getCookie("tic");
    
    
    
    if (ticket != undefined) {
        var cont1 = ticket - 1;
        producto[cont1] = getCookie("Producto");
        precio[cont1] = getCookie("Precio");

        document.getElementById("anterior").innerHTML = ticket -1;
        document.getElementById("tic").innerHTML = ticket;

        for(var i = 0; i <= cont1; i++)
        {
            console.log(precio[0]);
            document.getElementById("Productos").innerHTML = producto[i];
            document.getElementById("precios").innerHTML = precio[i];
        }

    }
    else {
        ticket = 0;
        document.getElementById("tic").innerHTML = 0;
    }
};*/