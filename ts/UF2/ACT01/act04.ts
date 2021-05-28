

function aleatorio()
{
    var mayus=["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","U","V","W","X","Y","Z"];
    var letras:string[]=[];
    var content = "";
    var numeros = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];

    content += '<div>';
    content += '<p>';
    for(let i = 0; i < 500; i++)
    {
        var num= Math.random() * (25 - 0) + 0;
        
        num = (Math.trunc(num));
        //console.log(num);

       

        letras[i] = mayus[num];

        
        content +=letras[i] + ", ";

        

        //Aqui hacemos el recuento de cuantas veces sale cada letra
        numeros[num]++;
    }
    content += '</p>';
    content += '</div>';
    document.getElementById("texto").innerHTML = content;

    // console.log(numeros);
    // console.log(mayus);

    aparecer(numeros,mayus);
}

function aparecer(numeros, letras)
{
    var content = "";
    for(let i = 0; i<25;i++)
    {
        content += '<div>';
        content += '<p>' + letras[i] + " - "+ numeros[i] + '</p>';
        content += '</div>';

        document.getElementById("texto2").innerHTML = content;
    }
}



window.onload = function ()
{
    aleatorio();
}
