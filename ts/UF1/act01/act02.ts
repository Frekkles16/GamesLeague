var nume1:any = prompt ("Introduce una numero: ") * 1;
var nume2:any = prompt ("Introduce otro numero: ") * 1;
var operacion:string = prompt ("Introduce que el operador: ");
var resultado:number;

if (operacion == "+")
{
    resultado = nume1 + nume2;
    document.write("Total de la suma es: "+ resultado + "<br>");
}else if (operacion == "-")
{
    resultado = nume1 - nume2;
    document.write("Total de la resta es: "+ resultado + "<br>");
}else if (operacion == "*")
{
    resultado = nume1 * nume2;
    document.write("Total de la multiplicacion es: "+ resultado + "<br>");
}else if (operacion == "/")
{
    resultado = nume1 / nume2;
    document.write("Total de la division es: "+ resultado + "<br>");
}else{
    alert("El operador no es valido")
}
