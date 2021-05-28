class yayo
{
    private ID:number;
    private nombre:String;
    private apellido:String;
    private edad:number;
    private longitud:any;
    private latitud:any;

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

    constructor(nombre:String, apellido:String, ID:number, edad:number, longitud:any, latitud:any) 
    {
        this.nombre = nombre;
        this.apellido = apellido;
        this.ID = ID;
        this.edad = edad;
        this.longitud = longitud;
        this.latitud = latitud;
    }
    
}



export {yayo};