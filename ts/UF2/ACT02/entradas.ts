
    var sesion = JSON.parse(localStorage.getItem('iniciar_sesion'));
    var ocupados = JSON.parse(localStorage.getItem('ocupados'));
    var contenido = "";
    for(var i = 0; i < 9; i++)
    {
        for(let j = 0; j < 20; j++)
        {
            if(ocupados[i][j] == sesion.id)
            {
                if(i == 0)
                {
                    contenido += "<h2>Spiderman into the spider verse</h2> <br>";
                }else if(i == 1)
                {
                    contenido += "<h2>El club de la lucha</h2> <br>";
                }else if(i == 2)
                {
                    contenido += "<h2>Baby Driver</h2> <br>";
                }else if(i == 3)
                {
                    contenido += "<h2>Capitan América Soldado de Invierno</h2> <br>";
                }else if(i == 4)
                {
                    contenido += "<h2>Los vengadores:Infinity War</h2> <br>";
                }else if(i == 5)
                {
                    contenido += "<h2>Spiderman</h2> <br>";
                }else if(i == 6)
                {
                    contenido += "<h2>American History X</h2> <br>";
                }else if(i == 7)
                {
                    contenido += "<h2>Fast & Furious 6</h2> <br>";
                }else if(i == 8)
                {
                    contenido += "<h2>Soy Leyenda</h2> <br>";
                }
                               
                contenido += "<p> Sala " + (i + 1) + "- Asiento " + (j + 1) + "</p> <br>";
            }
        }
    }

    document.getElementById("entradas").innerHTML = contenido;
