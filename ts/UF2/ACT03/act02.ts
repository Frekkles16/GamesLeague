
class Alumne
{
    private nom:String;
    private cognom:String;
    private nota1:number;
    private nota2:number;
    private nota3:number;
    private mitja:number;

    getNom() 
    {
        return this.nom;
    }

    getCognom() 
    {
        return this.cognom;
    }

    getNota1() 
    {
        return this.nota1;
    }

    getNota2() 
    {
        return this.nota2;
    }

    getNota3() 
    {
        return this.nota3;
    }

    getMitja() 
    {
        return this.mitja;
    }

    calcularMitja()
    {
        this.mitja = (this.nota1*1 + this.nota2*1 + this.nota3*1) / 3;     
    }


    constructor(nom:String, cognom:String, nota1:number, nota2:number, nota3:number) 
    {
        this.nom = nom;
        this.cognom = cognom;
        this.nota1 = nota1;
        this.nota2 = nota2;
        this.nota3 = nota3;
    }
    
}





var alumne = new Array();


function nouAlumne() 
{
    if (document.getElementById("nom").value != "" && document.getElementById("cognom").value != "" && document.getElementById("nota1").value != ""
    && document.getElementById("nota2").value != "" && document.getElementById("nota3").value != "") 
    {

        alumne.push(new Alumne(document.getElementById("nom").value,document.getElementById("cognom").value,
        document.getElementById("nota1").value, document.getElementById("nota2").value, document.getElementById("nota3").value));

        alumne[alumne.length - 1].calcularMitja();
        mostrarAlumnes();

    }
    
}

function mostrarAlumnes()
{
    var constr = '<h1 class="text-center">Alumnes</h1><table><thead><tr><th>Nom</th><th>Cognom</th><th>Nota 1</th><th>Nota 2</th><th>Nota 3</th><th>Mitja</th></tr></thead><tbody>';
    for (var i=0; i<alumne.length; i++) 
    {
        constr += '<tr><td>'+ alumne[i].getNom() +'</td><td>'+ alumne[i].getCognom() +'</td><td>'+ alumne[i].getNota1() 
        +'</td><td>'+ alumne[i].getNota2() +'</td><td>'+ alumne[i].getNota3() +'</td><td>'+ alumne[i].getMitja() + '</td></tr>';
    }

    constr += '</tbody></table>';

    document.getElementById("mostrarAlumnes").innerHTML = constr;
}




