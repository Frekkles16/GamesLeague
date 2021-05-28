

function editarFotos() 
{

    var numero_fotos = document.getElementById("n_foto");
    var altura = document.getElementById("altura");
    var ancho = document.getElementById("ancho");
    var src = document.getElementById("src");
    var val = document.getElementById("validacion");
    var imagen = document.getElementsByClassName("imagen");



    if(numero_fotos.value == "" || altura.value == "" || ancho.value == "") 
    {
        val.style.color = "red";
        val.innerHTML = "Todos son obligatorios";

    }else 
    {
        if(numero_fotos.value == "x")
        {
            for (var i = 0; i < imagen.length; i++) 
            {
                imagen[i].style.ancho = ancho.value + "px";
                imagen[i].style.altura = altura.value + "px";
                imagen[i].src = src.value;
            }

        }else if (isNaN(numero_fotos.value)) 
        {
            val.style.color = "red";
            val.innerHTML = "El valor del campo N.foto no es valido";

        }else 
        {
            imagen[numero_fotos.value].style.ancho = ancho.value + "px";
            imagen[numero_fotos.value].style.altura = altura.value + "px";
            imagen[numero_fotos.value].src = src.value;
        }
    }



}