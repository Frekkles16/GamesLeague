// Comprueba si es un DNI correcto (entre 5 y 8 letras seguidas de la letra que corresponda).
// Acepta NIEs (Extranjeros con X, Y o Z al principio)


function guardar()
{
    isDNI(document.getElementById("dni").value);
} 


function isDNI(dni) 
{
	var numero, letter, letra;
	var expresion_regular_dni = /^[XYZ]?\d{5,8}[A-Z]$/;
 
	dni = dni.toUpperCase();
 
    if(expresion_regular_dni.test(dni) === true)
    {
		numero = dni.substr(0,dni.length-1);
        letter = dni.substr(dni.length-1, 1);
        
		numero = numero % 23;
		letra = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];
        if (letra[numero] != letter) 
        {
			alert('Dni erroneo, la letra del DNI no se corresponde');
			return false;
        }else
        {
			alert('Dni correcto');
			return true;
		}
    }else
    {
		alert('Dni erroneo, formato no válido');
		return false;
	}
}