

    var nombres = ["victor", "valero", "quiros"];
    var copia = [];
    var resultado:boolean;

    resultado = copiar(nombres,copia);

    function copiar(array1,array2)
    {

        array2 = array1;

       if(array1 === array2)
       {
           return true;
       }else
       {
           return false;
       }

    }


    alert(resultado);

