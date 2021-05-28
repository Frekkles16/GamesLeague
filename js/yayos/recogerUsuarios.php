<?php

$host='localhost';
$basedatos='residencia';
$usuario = 'root';
$contrasena = '';

try {
    $conectar = new PDO('mysql:host='.$host.';dbname='.$basedatos, $usuario, $contrasena);
    //print "Conexión exitosa desde PDO!";

    $query = $conectar->prepare("SELECT * FROM usuarios WHERE Tipo LIKE 'Fam'");
    $query->execute();
    $data = $query->fetchAll();

        foreach ($data as $valores):
            echo '<option value="' . $valores["ID"] . '">' . $valores["Nombre"] . '</option>';
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