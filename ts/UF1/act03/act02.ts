
var Cookiedecode = decodeURIComponent(document.cookie);
var decode = Cookiedecode.split(';'); 
var name1 = "Contador=";


for (var i = 0; i < decode.length; i++) 
{
    var decode2 = decode[i];
    while (decode2.charAt(0) == ' ') 
    {
        decode2 = decode2.substring(1);
    }

    
    if (decode2.indexOf(name1) == 0) 
    {
        decode2.substring(name1.length, decode2.length);
        decode2 = decode2.substring(9, decode2.length);


        decode2++;
        document.cookie = "Contador=" + decode2;
        alert(document.cookie);
    } else 
    {
        document.cookie = "Contador=1";
        alert(document.cookie);
    }
}
