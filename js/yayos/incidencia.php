<?php

$host='localhost';
$basedatos='residencia';
$usuario = 'root';
$contrasena = '';

try {
    $conectar = new PDO('mysql:host='.$host.';dbname='.$basedatos, $usuario, $contrasena);
    //print "Conexión exitosa desde PDO!";

    $id = $_POST["id"];
    $incidencia = $_POST["incidencia"];


    $query = $conectar->prepare("UPDATE `yayos` SET `Incidencia`= '$incidencia' WHERE Id =" . $id);
    
    $query->execute();


    }
    catch (PDOException $econexion) {
    print "¡Error al conectar!: " . $econexion->getMessage() . "
    ";
    die();
    }
    $conectar =null;


?>