

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
    var producto = document.getElementById("producto").value;
    var precio = document.getElementById("precio").value;
    setCookie("Producto", producto);
    precio = precio*1;
    setCookie("Precio", precio);
    ticket = ticket*1 + 1;

    setCookie("tic", ticket);
}

var producto = [];
var precio = [];

window.onload = function () {
    
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
};