

var fresa:number = 0;
var naranja:number = 0;
var platano:number = 0;

function allowDrop(ev) 
  {
    ev.preventDefault();
  }
  
  function drag(ev) 
  {
    ev.dataTransfer.setData("texto", ev.target.id);
  }
  
  function drop(ev) 
  {
    
    ev.preventDefault();
    var data = ev.dataTransfer.getData("texto");
    
    switch(data)
    {
      case "fresa":
        fresa++;
        break;

      case "naranja":
        naranja++;
        break;

      case "platano":
        platano++;
        break;
    }

    document.getElementById("totalproductos").innerHTML = (fresa + platano + naranja);
    document.getElementById("fresas").innerHTML = fresa;
    document.getElementById("naranjas").innerHTML = naranja;
    document.getElementById("platanos").innerHTML = platano;
 
  } 