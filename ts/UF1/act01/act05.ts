var pepe: number[]=[]; 
var i:number = -1;
var pares:number = 0;
var impares:number = 0; 

do
{
    pepe.push(prompt ("Pon un numero y no letra: ") * 1);
    console.log(pepe);

    if(pepe[i] % 2 == 0)
    {
        pares++;
    }else if(pepe[i] % 2 == 1)
    {
        impares++;
    }

    i++;

    
    


}
while(!isNaN(pepe[i]))

console.log(pepe.pop());
document.write("Los numeros introducidos son: "+ pepe + "<br>");
document.write("Hay : "+ pares + " pares" + "<br>");
document.write("Hay : "+ impares + " impares" + "<br>");
