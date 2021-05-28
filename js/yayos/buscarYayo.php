<?php

$host='localhost';
$basedatos='residencia';
$usuario = 'root';
$contrasena = '';

try {
    $conectar = new PDO('mysql:host='.$host.';dbname='.$basedatos, $usuario, $contrasena);
    //print "Conexión exitosa desde PDO!";
    $familiar = $_POST["familiar"];
    $query = $conectar->prepare("SELECT `ID` FROM yayos WHERE `Familiar` LIKE " . $familiar);
    $query->execute();
    $data = $query->fetchAll();

        foreach ($data as $valores):
            echo $valores["ID"];
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