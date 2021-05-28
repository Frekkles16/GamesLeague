
function aleatorio()
{
    var numeros:number[]=[];
    var content = "";
    for(let i = 0; i < 1000; i++)
    {
        var num= Math.random() * (5000 - 1) + 1;
        
        numeros.push(Math.trunc(num));
            
        content += '<div>';
        content += '<p>' + numeros[i] + '</p>';
        content += '</div>';

        document.getElementById("texto").innerHTML = content;
    }

    var ordenado:number[] = [];
    ordenado = numeros.sort(comparar)
    console.log(ordenado);
    pares(ordenado);
}

function comparar(a, b)
{
    return a - b;
}


function pares(ordenado)
{
    var par:number[] = [];
    var impar:number[] = [];
    var ordenado2:number[] = [];

    for(let i = 0; i < 1000; i++)
    {
        if(ordenado[i] % 2 == 0)
        {
            par.push(ordenado[i]); 
        }else
        {
            impar.push(ordenado[i]);
        }
    }

   ordenado2 = par.concat(impar);
   console.log(ordenado2);

}


 
window.onload = function ()
{
    aleatorio();
}