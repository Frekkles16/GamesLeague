<?php

$host='localhost';
$basedatos='residencia';
$usuario = 'root';
$contrasena = '';

try {
    $conectar = new PDO('mysql:host='.$host.';dbname='.$basedatos, $usuario, $contrasena);
    //print "Conexión exitosa desde PDO!";

    $id = $_POST["id"];

    $query = $conectar->prepare("SELECT `ID`, `Nombre`, `Apellido`, `Edad`, `Longitud`, `Latitud` FROM yayos WHERE ID = $id");
    $query->execute();
    $data = $query->fetchAll();

        foreach ($data as $valores):
            echo $valores["ID"] . "," . $valores["Nombre"] . "," . $valores["Apellido"] ."," .  $valores["Edad"] . "," . $valores["Longitud"] . "," . $valores["Latitud"];
        endforeach;


    }
    catch (PDOException $econexion) {
    print "¡Error al conectar!: " . $econexion->getMessage() . "
    ";
    die();
    }
    $conectar =null;


?>

<!--  -->