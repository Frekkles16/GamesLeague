
class Client 
{
    private nom:String;
    private cognom:String;
    private codi:number;

    getNom() 
    {
        return this.nom;
    }

    getCognom() 
    {
        return this.cognom;
    }

    getCodi() 
    {
        return this.codi;
    }

    constructor(nom:String, cognom:String, codi:number) 
    {
        this.nom = nom;
        this.cognom = cognom;
        this.codi = codi;
    }
    
}

class Factura 
{
    private producte:String;
    private codi2:number;
    private preu:number;

    getProducte() 
    {
        return this.producte;
    }

    getCodi2() 
    {
        return this.codi2;
    }

    getPreu() 
    {
        return this.preu;
    }

    calcularPreu() 
    {
        var iva = this.preu * 21;
        iva = iva / 100;
        this.preu = this.preu*1 + iva*1;
    }

    constructor(producte:String, codi2:number, preu:number) 
    {
        this.producte = producte;
        this.codi2 = codi2;
        this.preu = preu;
    }
    
}




var clients = new Array();
var factures = new Array();

function nouClient() 
{
    if (document.getElementById("nom").value != "" && document.getElementById("cognom").value != "" && document.getElementById("codi").value != "") 
    {
        clients.push(new Client(document.getElementById("nom").value,document.getElementById("cognom").value,document.getElementById("codi").value));
        mostrarClient();
    }
    
}

function novaFactura() 
{
    if (document.getElementById("producte").value != "" && document.getElementById("codi2").value != "" && document.getElementById("preu").value != "") 
    {
        var y = factures.length;
        factures.push(new Factura(document.getElementById("producte").value,document.getElementById("codi2").value,document.getElementById("preu").value));
        factures[y].calcularPreu();
        mostrarFactura();
    }
    
}

function mostrarClient()
{
    var constr = '<h1 class="text-center">Mostrar clients</h1><table><thead><tr><th>Id</th><th>Nom</th><th>Cognom</th><th>Codi</th></tr></thead><tbody>';
    for (var i=0; i<clients.length; i++) 
    {
        constr += '<tr><th scope="row">'+i+'</th><td>'+ clients[i].getNom() +'</td><td>'+ clients[i].getCognom() +'</td><td>'+ clients[i].getCodi() +'</td></tr>';
    }

    constr += '</tbody></table>';

    document.getElementById("mostrarClients").innerHTML = constr;
}

function mostrarFactura()
{
    var constr = '<h1 class="text-center">Mostrar factures</h1><table class=" table-hover"><thead><tr><th>Id</th><th>Prodcute</th><th>C.client</th><th >Total</th></tr></thead><tbody>';
    for (var i=0; i<factures.length; i++) 
    {
        
        constr += '<tr><th>'+i+'</th><td>'+ factures[i].getProducte() +'</td><td>'+ factures[i].getCodi2() +'</td><td>'+ factures[i].getPreu() +'€</td></tr>';
    }

    constr += '</tbody></table>';

    document.getElementById("mostrarFactures").innerHTML = constr;
}


