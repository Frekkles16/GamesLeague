<?php

try {
    $conectar = new mysqli("localhost", "root", "", "residencia");
    //print "Conexión exitosa desde PDO!";

    $nombre = $_POST["nombre"];
    $password = $_POST["password"];
    $query = "SELECT * FROM usuarios WHERE `Nombre` LIKE '$nombre' and `Password` LIKE '$password'";
    $data = $conectar->query($query);
    if ($data->num_rows != 0) {
        foreach ($data as $key => $value) {
            echo $value["Nombre"] . ','. $value["ID"] . ','. $value["Tipo"];
        }
    }else{
        echo "false";
    }

        


    }
    catch (PDOException $econexion) {
    print "¡Error al conectar!: " . $econexion->getMessage() . "
    ";
    die();
    }
    $conectar =null;

?>