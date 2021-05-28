
function añadir()
{
    var titulo = document.getElementById("titol").value;
    var data = document.getElementById("data").value;
    var link = document.getElementById("link").value;
    var contenido = document.getElementById("contenido").value;

    var login = {
        
        titulo : titulo,
        data : data,
        link: link,
        contenido: contenido,

    }
    if(JSON.parse(localStorage.getItem("cont")) == null)
    {
        localStorage.setItem("cont", JSON.stringify("0"));
        var cont = JSON.parse(localStorage.getItem("cont"));


        localStorage.setItem(cont, JSON.stringify(login));
        cont++
        localStorage.setItem("cont", cont);

    }else{
        cont = JSON.parse(localStorage.getItem("cont"));
        localStorage.setItem(cont, JSON.stringify(login));

        cont++;
        localStorage.setItem("cont", cont);
    }



    

}