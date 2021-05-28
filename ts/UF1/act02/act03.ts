
function examen()
{

    var radio = document.getElementsByClassName("radio");
    var text = document.getElementsByClassName("text");
    var correctos = document.getElementById("correctos");
    var incorrectos = document.getElementById("incorrectos");
    var contador1 = 0;
    var contador2 = 0;
    var tmp = 0;



    for(var i = 0; i < radio.length; i++)
    {

        if(radio[i].checked == true)
        {
            tmp++;
        }     

    }

    if(tmp == 3)
    {
        for(var i = 0; i < radio.length; i++)
        {

            if(radio[i].value == "correctos" && radio[i].checked == true)
            {
                contador1++;
            }else if(radio[i].value != "correctos" && radio[i].checked == true)
            {
                contador2++;
            }      
    
        }
        
        correctos.style.color = "black";
        correctos.innerHTML = "Respuestas correctas: " + contador1;
        incorrectos.innerHTML = "Respuestas incorrectas: " + contador2;

    }else
    {
        correctos.style.color = "red";
        correctos.innerHTML = "Responde todas las preguntas";
    }
    
}