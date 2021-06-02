<?php

$host='localhost';
$basedatos='GamesLeague';
$usuario = 'root';
$contrasena = '';

session_start();

try {
        $conectar = new PDO('mysql:host='.$host.';dbname='.$basedatos, $usuario, $contrasena);

        $id = $_POST['id'];

        $query = $conectar->prepare("SELECT Nom, Data, Id_Videojoc FROM torneig WHERE Id_Torneig =" . $id);
        $query->execute();
        $data = $query->fetchAll();

        foreach ($data as $key => $value) {
            echo $value["Nom"] . ',' . $value["Data"] . ',' . $value["Id_Videojoc"];
        }

        

        

    }
    catch (PDOException $econexion) {
    print "¡Error al conectar!: " . $econexion->getMessage() . "
    ";
    die();
    }
    $conectar =null;


?>