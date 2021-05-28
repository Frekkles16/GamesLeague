var fotos;
var id2 = null;


var cantidad:number = 0;
var punts:number = 0;
var segundos = 20;

window.onload = function() 
{
    fotos = ["pikachu.jpg", "pikachu.jpg", "charmander.jpg", "charmander.jpg", "squitle.jpg", "squitle.jpg"];
    mezclar(fotos);

    
    
    window.setInterval(function()
    {
    
    if (segundos > 0)
    {
        var time = document.getElementById("tiempo");
        time.innerHTML = segundos;
        segundos--;

    }else if(segundos == 0)
    {
        
        segundos = -1;
        document.getElementById("tiempo").innerHTML = "Fin";
        alert("Eres mas malo que el tabaco");
    }

    if (punts == 3)
    {
        document.getElementById("tiempo").innerHTML = "HAS GANADO";
    }

    
    },1000);
}


function girarCarta(id) 
{
    if (segundos < 0) 
    {
        alert("Tiempo finalizado, para volver a jugar reinicia la pagina");  
    }
    else
    {
        document.getElementById(id).src = fotos[id];
        cantidad++;

        if (cantidad == 2 && document.getElementById(id).src != document.getElementById(id2).src) 
        {
            setTimeout
            (
                function()
                {
                    document.getElementById(id).src = "carta.jpg";
                    document.getElementById(id2).src = "carta.jpg";
                    
                    cantidad = 0; 
                },1000
            )
        }else
        {
            if (cantidad == 2 && document.getElementById(id).src == document.getElementById(id2).src) 
            {
                cantidad = 0; 
                id2 = null;
                punts++;
            }
        
            id2 = id;
        
            if (punts == 3) 
            {
                alert("Has ganado en " + (30-segundos) + "segundos");
                cantidad = 100;
            }
        }
    }
}

function mezclar(array) {
    var actual = array.length, temporal, aleatori;
  
    while (0 !== actual) {
  
        aleatori = Math.floor(Math.random() * actual);
        actual -= 1;
  
      temporal = array[actual];
      array[actual] = array[aleatori];
      array[aleatori] = temporal;
    }
  
    return array;
  }