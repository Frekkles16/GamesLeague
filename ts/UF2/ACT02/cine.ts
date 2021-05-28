class Sala {
    private seients = new Array(32);

    setSeients(i,j) {
        this.seients[i] = j;
    }

    getSeients(i) {
        return this.seients[i];
    }

    constructor(){}
}
class Usuari {
    private usuari:String;
    private contrasenya:String;

    getUsuari() {
        return this.usuari;
    }

    getContrasenya() {
        return this.contrasenya;
    }

    constructor(usuari:String, contrasenya:String) {
        this.usuari = usuari;
        this.contrasenya = contrasenya;
    }
}

// class Entrada
// {
//     private preu:number;
//     private estat:boolean;
//     private sala:number;


//     getPreu()
//     {
//         return this.preu;
//     }
//     getEstat()
//     {
//         return this.estat;
//     }

//     getSala()
//     {
//         return this.sala;
//     }



// }



var login = {
    usuarios:[
        { 
            usuario : "Marcos",
            contrasena : "12345",
            id: 5
        },
        {
            usuario : "Victor",
            contrasena : "54321",
            id: 6

        }
    ]
}
localStorage.setItem('ar_login', JSON.stringify(login));

var validacion = 1;

var users = JSON.parse(localStorage.getItem('ar_login'));


while(JSON.parse(localStorage.getItem('iniciar_sesion')) == null)
{
    var user_actual:string = prompt ("Introduce tu Usuario (U:Marcos P: 12345 o U:Victor P: 54321): ");
    var passw_actual:string = prompt ("Introduce la Contraseña:");
    
    for(var i = 0; i < 2; i++)
    {
        if(users.usuarios[i].usuario == user_actual && users.usuarios[i].contrasena == passw_actual)
        {
            validacion = 1;
            var sesion = users.usuarios[i];
            localStorage.setItem('iniciar_sesion', JSON.stringify(sesion));
        }

    }

    if(validacion == 0 )
    {
        alert("Usuario o contraseña introducidos incorrectamente");
    }

}



// console.log(sesion.id);



var sesion_actual = JSON.parse(localStorage.getItem('iniciar_sesion'));

window.onload = function ()
{
    
    
    for(i = 0; i < 9; i++)
    {
        var content = "";
        var contador = 0;
        for(let q = 0; q < 5; q++)
        {
            content += '<table style="margin-left: 35%;">';
            content += '<tr>';
            for(let j = 0; j < 4; j++)
            {
                content += '<td id=' + i + "_" + contador  +' onclick="reservar(id)"' + '>'+ '<img src="silla.png" style="width: 20px;">' + '</td>';
                contador++;
            }

            content += '</tr>'; 
            content += '</table>';
        }

        
        document.getElementById("tabla" + i).innerHTML = content;
    }
    

    
    var ocupados = new Array(2);
    ocupados = JSON.parse(localStorage.getItem('ocupados'));
    console.log(ocupados);
    if(ocupados == null)
    {
        valores();
    }else
    {
        for(let x = 0; x < 9; x++)
        {
            for(let a = 0; a < 20; a++)
            {
                if(ocupados[x][a] != 0)
                {                  
                    document.getElementById(x + "_" + a).style.backgroundColor = "red";  
                }else
                {       
                    document.getElementById(x + "_" + a).style.backgroundColor = "white";
                }
            }
        }
    }   
}



function valores()
{
    var ocupado = new Array(9);
    for(let i = 0; i < 9; i++)
    {
        ocupado[i] = new Array(20);
    }

    for(let i = 0; i < 9; i++)
    {
        for(let j = 0; j < 20; j++)
        {
            ocupado[i][j] = 0;
        }
    }

    console.log(ocupado);
    localStorage.setItem('ocupados', JSON.stringify(ocupado));
    
}

function reservar(id)
{
    var ocupados = JSON.parse(localStorage.getItem('ocupados'))
    
    var sala = id.substr(0, 1);
    sala = sala*1;
    var asiento = id.substr(2);
    asiento = asiento*1;

    if(ocupados[sala][asiento] != 0)
    {     
        if(ocupados[sala][asiento] == sesion_actual.id)
        {
            ocupados[sala][asiento] = 0;
            document.getElementById(id).style.backgroundColor = "white";
        }else
        {
            alert("Este asiento ya esta seleccionado por otro usuario");
        }
        
    }else
    {
        ocupados[sala][asiento] = sesion_actual.id;
        document.getElementById(id).style.backgroundColor = "red";
    }

    localStorage.setItem('ocupados', JSON.stringify(ocupados));
}


function carrito()
{
    var ocupados = JSON.parse(localStorage.getItem('ocupados'));
    var contenido = "<div>";
    var contador = 0;
    for(i = 0; i < 9; i++)
    {
        for(let j = 0; j < 20; j++)
        {
            if(ocupados[i][j] == sesion_actual.id)
            {
                contenido += "<p> Sala " + (i + 1) + "- Asiento " + (j + 1) + "</p> <br>";
                contador++;
            }
        }
    }
    contenido+= "<br> El precio total es: " + (contador * 9) + "€";
    contenido += "</div>";

    document.getElementById("carrito").innerHTML = contenido;
}

function cerrarSesion()
{
    sesion_actual = null;
    localStorage.setItem('iniciar_sesion', JSON.stringify(sesion_actual));
    location.reload();
}



