
//var nombre = localStorage.setItem("Nombre", "marcos");
//var apellido = localStorage.setItem("Apellido", "venteo");
//alert(localStorage.getItem("Apellido"));



//Object JSON

//var alumnos = {'marcos' : '1234' , 'joan' : '4567'};


    // var supermario:number = document.getElementById("SuperMario").value;

    // var mariokart:number = document.getElementById("MarioKart").value;

    // var supersmash:number = document.getElementById("SuperSmash").value;



    var carro = 
    {
                0: 
                    {
                        producto : "New Super Mario Bros. U Deluxe",
                        precio : "80"
                    },
                1:  {
                        producto : "Mario Kart 8",
                        precio : "60"
                    },
                2:  {
                        producto : "Super Smash Bros",
                        precio : "70"
                    }
                
    }
        

    function añadir(numero)
    {
        var productos = JSON.parse(localStorage.getItem('productos')) || [];
        var anade =
        {
            nombre : carro[numero].producto,
            precio : carro[numero].precio
        }

            productos.push(anade);
            localStorage.setItem('productos', JSON.stringify(productos));

            enseñarcarro();
    }

    function enseñarcarro()
        {
            var a = JSON.parse(localStorage.getItem('productos'));

                var content = "";
                for (var i = 0; i < a.length; i++) {
                    content += '<div class="col-3 ml-2 mr-2 mt-5">';
                    content += '<h3 class="text-center mt-2">' + a[i].nombre + '</h3>';
                    content += '<p class="text-center mt-2">' + a[i].precio + '€</p>';
                    content += '<div class="text-center">';
                    content += '</div>';
                    content += '</div>';
                }
                document.getElementById("carro").innerHTML = content;
        }
    
    window.onload = function ()
    {
        enseñarcarro();
    }







    //console.log(marcos);
    //alert(JSON.stringify(marcos));
    //alert(JSON.stringify(alumnos));

    //Guarda el objeto en la base de datos
    // localStorage.setItem('key', JSON.stringify(carro));

    // //Recupera el objeto de la base de datos
    // var a = (JSON.parse(localStorage.getItem('key')));



    // for(var i = 0; i < a.cliente.length; i++)
    // {
        
    //         alert(a.cliente[0].productos[i].producto);
        
    // }
}