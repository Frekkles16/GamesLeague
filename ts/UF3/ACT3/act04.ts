

function añadirMenu()
{
    var nombre = document.getElementById("menu").value;
    
    if(nombre != "")
    {
        var lista = document.createElement("LI");
        var text = document.createTextNode(nombre);
        lista.appendChild(text);

        document.getElementById("nav").appendChild(lista);
        var cont = document.getElementsByTagName("LI").length;
        for (let i = 0; i < cont; i++) 
        {
            // document.getElementsByTagName("LI")[i].setAttribute("class", "menu");
            document.getElementsByTagName("LI")[i].setAttribute("id",  document.getElementsByTagName("LI")[i].textContent );
        }
        addOptions(nombre);
    }else
    {
        alert("No puedes añadir un menu sin nombre");
    }
    
}

function addOptions(nombre) {
    var array= [];
    array.push(nombre);

    var select = document.getElementsByName("sub_menu")[0];
   
    for (value in array) {
     var option = document.createElement("option");
     option.text = array[value];
     select.add(option);
    }
}

function añadirSubMenu()
{
    var nombre = document.getElementById("sub_menu_name").value;
    var menu = document.getElementById("sub_menu").value;

    var cont = document.getElementById(menu).getElementsByTagName("UL").length;
    if(nombre != "")
    {
        var aux = menu + "sub";
        if(cont == 0)
        {
            
            // Crear ul
            var lista = document.createElement("UL");
            document.getElementById(menu).appendChild(lista);
            document.getElementById(menu).getElementsByTagName("UL")[0].setAttribute("id", aux);    
            // document.getElementById(menu).getElementsByTagName("UL")[0].setAttribute("class", "menu2"); 
        }

        // Crear li
        var lista = document.createElement('LI');
        var text = document.createTextNode(nombre);
        lista.appendChild(text);

        document.getElementById(aux).appendChild(lista);

        
        var conta = document.getElementById(aux).getElementsByTagName("LI").length;
        for (let i = 0; i < conta; i++) {
            // document.getElementById(aux).getElementsByTagName("LI")[i].setAttribute("class", "menu");
            document.getElementById(aux).getElementsByTagName("LI")[i].setAttribute("id",  document.getElementById(aux).getElementsByTagName("LI")[i].textContent );
        }
        addOptions(nombre);
        
    }else
    {
        alert("No puedes añadir un menu sin nombre");
    }
}