window.onload = function ()
{
    var content = "";
    content += '<table>';
    var contador = 0;
    for(let i = 0; i<12;i++)
    {
        content += '<tr>';
        for(let j = 0; j < 6; j++)
        {
        content += '<td id=' + contador  +' onclick="reservar(id)"' + '>'+ '<img src="silla.png" style="width: 20px;">' + '</td>';
        contador++;
        }

        content += '</tr>';
            
        
    }
    content += '</table>';
    document.getElementById("tabla").innerHTML = content;

    
    var ocupados = JSON.parse(localStorage.getItem('ocupados'))
    console.log(ocupados);
    if(ocupados == null)
    {
        valores();
    }else{
        for(let a=0; a < 72; a++)
        {
            if(ocupados[a] == 1)
            {
                
                document.getElementById(a).style.backgroundColor = "red";

            }else
            {
                
                document.getElementById(a).style.backgroundColor = "white";
            }
        }
    }   
}



function valores()
{
    
    var ocupados = [];
    for(let i = 0; i < 72; i++)
    {
        ocupados[i] = 0;
    }

    localStorage.setItem('ocupados', JSON.stringify(ocupados));
    
}

function reservar(id)
{
    var ocupados = JSON.parse(localStorage.getItem('ocupados'))
    
    if(ocupados[id] == 1)
    {
        
     ocupados[id] = 0;
     document.getElementById(id).style.backgroundColor = "white";
    }else
    {
        ocupados[id] = 1;
        document.getElementById(id).style.backgroundColor = "red";
    }

    localStorage.setItem('ocupados', JSON.stringify(ocupados));

}

