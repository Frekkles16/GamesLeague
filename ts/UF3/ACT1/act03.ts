var contador:number = 0;
var cont3 = 0;
var texto = "";
var cont2 = 0;
function allowDrop(ev) 
{
  ev.preventDefault();
}
  
function drop(ev) 
{
  
  var i;
  ev.preventDefault();
  
  for(i=0;i<=contador+1;i++) 
  {
    cont3++;

    texto = texto + "<b>Archivo</b> " + cont2 + ": " + ev.dataTransfer.files[i].name 
    + " [" +ev.dataTransfer.files[i].type + "] - " + ev.dataTransfer.files[i].size + "bytes<br>";
    document.getElementById("info").innerHTML = texto;

    contador++;
    cont2++;

    document.getElementById("cont").innerHTML = "<b>Total archivos</b>: " + contador;
  }
  
} 