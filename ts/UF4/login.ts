
function sesion(){
  if ( JSON.parse(localStorage.getItem('ar_login')) != null){

    let sesion = JSON.parse(localStorage.getItem('ar_login'));

    switch(sesion.tipo){
      case "Admin":
        location.href ="http://localhost/TypeScript/js/yayos/admin.html";
        break;

      case "Fam":
        EncontrarYayo(sesion.id);
        break;
      
      case "Worker":
         location.href ="http://localhost/TypeScript/js/yayos/worker.html";
        break;

      default:
        alert("Algo falla bro");
        break;
    }

  }

  
}

function EncontrarYayo(id)
{

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {

        irPerfil(parseInt(this.responseText));
        
      }
    };

      xhttp.open("POST", "buscarYayo.php", true);
      xhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 
      xhttp.send("familiar=" + id);

}


function irPerfil(id)
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


function bbdd()
   {
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() 
    {
        if (this.readyState == 4 && this.status == 200) {
          if(this.responseText != "false")
          {
            let user = this.responseText.split(',')
            console.log(user);
            var login = 
            { 
                usuario : user[0],
                id: user[1],
                tipo : user[2]
            }
            

            localStorage.setItem('ar_login', JSON.stringify(login));
            let users2 = JSON.parse(localStorage.getItem('ar_login'));
            console.log(users2);
            sesion();
          }else{
              alert('Datos No validos');
          }
        }
      };

      let nombre =  document.getElementById('user').value;
      let password = document.getElementById('password').value;
  
      xhttp.open("POST", "login.php", true);
      xhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 
      xhttp.send("nombre=" + nombre + "& password="+ password); 

   }