<?php

$host='localhost';
$basedatos='GamesLeague';
$usuario = 'root';
$contrasena = '';

session_start();

try {
        $conectar = new PDO('mysql:host='.$host.';dbname='.$basedatos, $usuario, $contrasena);


        $query = $conectar->prepare("SELECT Id_Torneig, Nom, Data FROM torneig WHERE Id_Admin = 1");
        $query->execute();
        $data = $query->fetchAll();

        foreach ($data as $key => $value) {
            echo '<option value="' . $value["Id_Torneig"] . '">' . $value["Nom"] . '---' . $value["Data"] . ' </option>';
        }

        

        

    }
    catch (PDOException $econexion) {
    print "¡Error al conectar!: " . $econexion->getMessage() . "
    ";
    die();
    }
    $conectar =null;


?>