

function cambiar_estilo(num)
{
    switch(num)
    {
        case 1:
            document.getElementById("texto").style.fontSize="54px";
            break;
        case 2:
            document.getElementById("texto").style.fontSize="16px";
            document.getElementById("texto").style.color='black';
            document.getElementById("texto").style.backgroundColor='white';
            document.getElementById("texto").style.fontFamily='Times New Roman';
            break;
        case 3:
            document.getElementById("texto").style.color='red';
            break;
        case 4:
            document.getElementById("texto").style.backgroundColor='blue';
            break;
        case 5:
            document.getElementById("texto").style.fontFamily='Comic Sans MS';
            break;
    }

}