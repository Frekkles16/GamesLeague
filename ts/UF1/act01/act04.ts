var nume1:any = prompt ("Introduce un numero: ") * 1;
var nume2:any = prompt ("Introduce otro numero: ") * 1;
var nume3:any = prompt ("Introduce un tercer numero: ") * 1;

var grande:number;
var peque:number;

//Mas Grande
if(nume1 > nume2 && nume1 > nume3)
{
    grande = nume1;
}else if(nume2 > nume1 && nume2 > nume3)
{
    grande = nume2;
}else if(nume3 > nume2 && nume3 > nume1)
{
    grande = nume3;
}

//Mas pequeño
if(nume1 < nume2 && nume1 < nume3)
{
    peque = nume1;
}else if(nume2 < nume1 && nume2 < nume3)
{
    peque = nume2;
}else if(nume3 < nume2 && nume3 < nume1)
{
    peque = nume3;
}

document.write("El mas grande es: "+ grande + "<br>");
document.write("El mas pequeno es: "+ peque + "<br>");