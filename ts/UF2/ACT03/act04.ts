class Instrument
{
    private marca:String;
    private tipus:String;

    getMarca() 
    {
        return this.marca;
    }

    getTipus()
    {
        return this.tipus;
    }

    constructor(marca:String, tipus:String) 
    {
        this.marca = marca;
        this.tipus = tipus;
    }
    
}


class Bateria extends Instrument
{
    platells:number;

    constructor(bateriaMarca:string, bateriaTipus:String, bateriaPlatells:number)
    {
        super(bateriaMarca, bateriaTipus);
        this.platells=bateriaPlatells;
    }

    getPlatells()
    {
        return this.platells;
    }

    Percusir()
    {
        alert("Estas rebentant la bateria");
    }

}


class Flauta extends Instrument
{
    forats:number;

    constructor(flautaMarca:string,flautaTipus:String, flautaForats:number)
    {
        super(flautaMarca, flautaTipus);
        this.forats=flautaForats;
    }

    getForats()
    {
        return this.forats;
    }

    Bofar()
    {
        alert("Mare meva com li bufes");
    }

}


class Piano extends Instrument
{
    tecles:number;

    constructor(pianoMarca:string, pianoTipus:String, pianoTecles:number)
    {
        super(pianoMarca, pianoTipus);
        this.tecles = pianoTecles;
    }

    getTecles()
    {
        return this.tecles;
    }

    Teclejar()
    {
        alert("Oh my god, ets Mozart en persona");
    }
}


var seleccio:String;
var contador:number = 0;
var Instruments = new Array();

function afegirInstrument()
{
    seleccio = document.getElementById("tipus").value;

    switch(seleccio)
    {
        case "bateria":

            Instruments.push(new Bateria(document.getElementById("marca").value, seleccio, 5));
            alert("Bateria insertada correctament");
            break;

        case "flauta":
            Instruments.push(new Flauta(document.getElementById("marca").value, seleccio,10));
            alert("Faluta insertada correctament");
            break;

        case "piano":
            Instruments.push(new Piano(document.getElementById("marca").value, seleccio,120));
            alert("Piano insertat correctament");
            break;
    }
}


function llistarInstruments()
{
    console.log(Instruments);
    var constr = "<h4>";
    for (var i=0; i<Instruments.length; i++) 
    {
        switch(Instruments[i].getTipus())
        {
            case "bateria":

                constr += i +". "+ 'Bateria: '+ Instruments[i].getMarca() + " Numero de platells: " + Instruments[i].getPlatells() + '<br>';

                break;

            case "flauta":

                constr += i +". "+ 'Flauta: '+ Instruments[i].getMarca() + " Numero de forats: " + Instruments[i].getForats() + '<br>';                
                break;

            case "piano":

                constr += i +". "+ 'Piano: '+ Instruments[i].getMarca() + " Numero de tecles: " + Instruments[i].getTecles() + '<br>';

                break;
        }

        
    }

    constr += '</h4>';

    document.getElementById("llistarInstruments").innerHTML = constr;
}


function tocarInstrument()
{
    var seleccio_num:number = document.getElementById("num").value;

    switch (Instruments[seleccio_num].tipus)
    {
        case "bateria":

            Instruments[seleccio_num].Percusir();

            break;

        case "flauta":

            Instruments[seleccio_num].Bofar();                
            break;

        case "piano":

            Instruments[seleccio_num].Teclejar();

            break;
    }

}
