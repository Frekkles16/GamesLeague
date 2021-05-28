
function mostrar()
{
    alert("La cookie es:" + document.cookie);
}

function guardar()
{
    var nom = "holi marcos";
    setCookie(nom,5);
}

//Guardar cookies
function setCookie(cvalor,ctemps)
{
    var avui = new Date();
    avui.setTime(avui.getTime() +(ctemps*60*1000));
    var fi = "expires=" + avui.toUTCString();
    document.cookie = cvalor + ";" + fi;
    alert("Cokkie establecida");

}

