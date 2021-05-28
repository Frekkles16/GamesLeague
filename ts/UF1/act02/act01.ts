
function SaltarError()
{
    var user:string = document.getElementById("user").value;
    var password:string = document.getElementById("password").value;

    if(user == "Victor" && password == "hola1")
    {
        document.getElementById("validacion").innerHTML = "Usuario Correcto";
        
    }else
    {
        if(user == "")
        {
            document.getElementById("compr_user").style.color = "red";
                document.getElementById("compr_user").innerHTML = "*Campo Obligatorio";
        }
        if(password == "")
        {
            document.getElementById("compr_psw").style.color = "red";
                document.getElementById("compr_psw").innerHTML = "*Campo Obligatorio";
        }
        if(user != "" && password != "")
        {
            document.getElementById("validacion").innerHTML = "Usuario Incorrecto";
        }  
    }
}
