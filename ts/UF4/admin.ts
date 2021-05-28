// import {yayo} from "./yayo.js";

var longitud;
var latitud;


var yayo2;


function comprobar()
{
    if ( JSON.parse(localStorage.getItem('ar_login')) != null){

        let sesion = JSON.parse(localStorage.getItem('ar_login'));
    
        switch(sesion.tipo){
          case "Admin":

            break;
    
          case "Fam":
            alert("Ha entrado como familiar, no tiene privilegios para entrar aqui.")
            location.href ="http://localhost/TypeScript/js/yayos/index.html";
            break;
          
          case "Worker":
            alert("Ha entrado como trabajador, no tiene privilegios para entrar aqui.")  
            location.href ="http://localhost/TypeScript/js/yayos/worker.html";
            break;
    
          default:
            alert("Algo falla bro");
            break;
        }
    
      }else{
          alert("Tienes que iniciar sesion");
          location.href ="http://localhost/TypeScript/js/yayos/index.html";
      }
}

function rellenar()
{
    var xhttp = new XMLHttpRequest();


    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

        document.getElementById("familiar").innerHTML = this.responseText;
        }

    };
    
    xhttp.open("GET", "recogerUsuarios.php", true);
    xhttp.send();
}

function crear()
  {
    
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
  
            alert("Yayo enviado correctamente");
            mostrar();
          
        }
  
      };
      var yayo1 = new yayo(null, document.getElementById("nombre").value, document.getElementById("apellido").value,document.getElementById("edad").value, null, null, document.getElementById("familiar").value)
      console.log(yayo1);
      xhttp.open("POST", "insert.php", true);
      xhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 
      xhttp.send("nombre=" + yayo1.getNombre() + "& apellido=" + yayo1.getApellido() + "& edad=" + yayo1.getEdad()+ "& familiar=" + yayo1.getFamiliar());
  }

function mostrar(){
    var xhttp = new XMLHttpRequest();


    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

        var tabla = '<table class="table table-striped"><thead><tr><th>Id</th><th>Nombre</th><th>Apellido</th><th>Edad</th><th>Modificación</th><th>Ver perfil</th></tr></thead>';
        tabla += '<tbody>';   
        document.getElementById("mostrar").innerHTML = tabla + this.responseText + '</tbody></table>' ;
        }

    };
    
    xhttp.open("GET", "recogerYayos.php", true);
    xhttp.send();
}


function modificar (id)
{
  var xhttp = new XMLHttpRequest();


    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          var datos = this.responseText.split(',');
          yayo2 = new yayo(parseFloat(datos[0]),datos[1],datos[2],parseInt(datos[3]),datos[4],datos[5],parseFloat(datos[6]))
          console.log(yayo2); 

          
          var aux = document.getElementById('nom');
          aux.setAttribute("value", yayo2.getNombre());

          aux = document.getElementById('apl');
          aux.setAttribute("value", yayo2.getApellido());

          aux = document.getElementById('ed');
          aux.setAttribute("value", yayo2.getEdad());

          aux = document.getElementById('id');
          aux.setAttribute("value", yayo2.getId());

        }

    };
    
    xhttp.open("POST", "selectId.php", true);
      xhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 
      xhttp.send("id=" + id);
}


function update()
{

    yayo2.setNombre(document.getElementById('nom').value);
    yayo2.setApellido(document.getElementById('apl').value);
    yayo2.setEdad(document.getElementById('ed').value);

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {

          alert("Yayo modificado correctamente");
          mostrar();
        
      }
    };

      xhttp.open("POST", "update.php", true);
      xhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 
      xhttp.send("id="+ yayo2.getId() +  "&nombre=" + yayo2.getNombre() + "& apellido=" + yayo2.getApellido() + "& edad=" + yayo2.getEdad());

}

function perfil(id)
{

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {

        location.href ="http://localhost/TypeScript/js/yayos/perfil.html";
        
      }
    };

      xhttp.open("POST", "mostrar.php", true);
      xhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 
      xhttp.send("id=" + id);

}



class yayo
{
    private ID:number;
    private nombre:String;
    private apellido:String;
    private edad:number;
    private longitud:any;
    private latitud:any;
    private familiar:any;


    getId() 
    {
        return this.ID;
    }

    getNombre() 
    {
        return this.nombre;
    }

    getApellido() 
    {
        return this.apellido;
    }

    getEdad()
    {
        return this.edad;
    }

    getLongitud() 
    {
        return this.longitud;
    }

    getLatitud() 
    {
        return this.latitud;
    }

    getFamiliar() 
    {
        return this.familiar;
    }

    setNombre(nombre)
    {
        this.nombre = nombre;
    }

    setApellido(apellido)
    {
        this.apellido = apellido;
    }

    setEdad(edad)
    {
        this.edad = edad;
    }

    setLongitud(longitud)
    {
        this.longitud = longitud;
    }

    setLatitud(latitud)
    {
        this.latitud = latitud;
    }

    setFamiliar(familiar)
    {
        this.familiar = familiar;
    }

    constructor(ID:number, nombre:String, apellido:String,  edad:number, longitud:any, latitud:any, familiar:any) 
    {
        this.nombre = nombre;
        this.apellido = apellido;
        this.ID = ID;
        this.edad = edad;
        this.longitud = longitud;
        this.latitud = latitud;
        this.familiar = familiar;
    }
    
}