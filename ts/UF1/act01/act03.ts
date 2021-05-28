var nume1:any = prompt ("Introduce un numero: ") * 1;
var nume2:any = prompt ("Introduce otro numero: ") * 1;

var suma:number = 0;
for(;nume1 <= nume2; nume1++)
{
    suma = suma + nume1;
    console.log(nume1);
}

document.write("Total es: "+ suma + "<br>");