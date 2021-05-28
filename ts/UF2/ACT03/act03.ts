class Vehicle
{
    private marca:String;
    private pes:number;
    private tipus:String;
    private rodes:number;
    

    getMarca() 
    {
        return this.marca;
    }

    getPes() 
    {
        return this.pes;
    }

    getTipus() 
    {
        return this.tipus;
    }

    getRodes() 
    {
        return this.rodes;
    }



    constructor(marca:String, pes:number, tipus:String, rodes:number) 
    {
        this.marca = marca;
        this.pes = pes;
        this.tipus = tipus;
        this.rodes = rodes;
    }
    
}


class Cotxes extends Vehicle
{
    portes:number;

    constructor(cotxeMarca:string, cotxePes:number, cotxeTipus:String, cotxeRodes:number, cotxePortes:number)
    {
        super(cotxeMarca,cotxePes,cotxeTipus,cotxeRodes);
        this.portes=cotxePortes;
    }

    getPortes()
    {
        return this.portes;
    }
}


class Motos extends Vehicle
{
    cavalls:number;

    constructor(motosMarca:string, motosPes:number, motosTipus:String, motosRodes:number, motosCavalls:number)
    {
        super(motosMarca,motosPes,motosTipus,motosRodes);
        this.cavalls=motosCavalls;
    }

    getCavalls()
    {
        return this.cavalls;
    }
}


class Camions extends Vehicle
{
    mercancia:String;

    constructor(camionsMarca:string, camionsPes:number, camionsTipus:String, camionsRodes:number, camionsMercancia:String)
    {
        super(camionsMarca,camionsPes,camionsTipus,camionsRodes);
        this.mercancia = camionsMercancia;
    }

    getMercancia()
    {
        return this.mercancia;
    }
}


var seleccio:String;
var contador:number = 0;
var vehicles = new Array();

function afegirVehicle()
{
    seleccio = document.getElementById("tipus").value;

    switch(seleccio)
    {
        case "cotxe":

            vehicles.push(new Cotxes(document.getElementById("marca").value, document.getElementById("pes").value, seleccio,4,5));
            alert("Cotxe insertat correctament");
            break;

        case "moto":
            vehicles.push(new Motos(document.getElementById("marca").value, document.getElementById("pes").value, seleccio,2,125));
            alert("Moto insertat correctament");
            break;

        case "camio":
            vehicles.push(new Camions(document.getElementById("marca").value, document.getElementById("pes").value, seleccio,4,"Peres"));
            alert("Camio insertat correctament");
            break;
    }
}


function llistarVehicle()
{
    console.log(vehicles);
    var constr = "<h4>";
    for (var i=0; i<vehicles.length; i++) 
    {
        switch(vehicles[i].getTipus())
        {
            case "cotxe":

                constr += i +". "+ 'Cotxe: '+ vehicles[i].getMarca() +' Pes:'+ vehicles[i].getPes() +'Kg Tipus: '+ vehicles[i].getTipus() 
                +' Rodes: '+ vehicles[i].getRodes() + ' Portes: '+ vehicles[i].getPortes() + '<br>';

                break;

            case "moto":

                constr += i +". "+ 'Cotxe:'+ vehicles[i].getMarca() +' Pes:'+ vehicles[i].getPes() +'Kg Tipus: '+ vehicles[i].getTipus() 
                +' Rodes: '+ vehicles[i].getRodes() + ' Cavalls: '+ vehicles[i].getCavalls() + '<br>';
                
                break;

            case "camio":
                constr += i +". "+ 'Cotxe:'+ vehicles[i].getMarca() +' Pes:'+ vehicles[i].getPes() +'Kg Tipus: '+ vehicles[i].getTipus() 
                +' Rodes: '+ vehicles[i].getRodes() + ' Mercancia: '+ vehicles[i].getMercancia() + '<br>';

                break;
        }

        
    }

    constr += '</h4>';

    document.getElementById("llistarVehicle").innerHTML = constr;
}


function eliminarVehicle()
{
    var eliminar:number = document.getElementById("num").value;
    console.log(eliminar);
    vehicles.splice(eliminar,1);
    console.log(vehicles);
    llistarVehicle();

}
