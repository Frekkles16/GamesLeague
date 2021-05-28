<?php

$host='localhost';
$basedatos='residencia';
$usuario = 'root';
$contrasena = '';

try {
    $conectar = new PDO('mysql:host='.$host.';dbname='.$basedatos, $usuario, $contrasena);
    //print "Conexión exitosa desde PDO!";

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $edad = $_POST["edad"]; 
    $familiar = $_POST["familiar"]; 


    $query = $conectar->prepare("INSERT INTO `yayos` (`Nombre`, `Apellido`, `Edad`,`Familiar`) VALUES('$nombre', '$apellido', $edad, $familiar)");
    $query->execute();

    }
    catch (PDOException $econexion) {
    print "¡Error al conectar!: " . $econexion->getMessage() . "
    ";
    die();
    }
    $conectar =null;


?>