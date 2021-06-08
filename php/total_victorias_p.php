<?php

$host='localhost';
$basedatos='GamesLeague';
$usuario = 'root';
$contrasena = '';

session_start();

try {
        $conectar = new PDO('mysql:host='.$host.';dbname='.$basedatos, $usuario, $contrasena);
        //print "Conexión exitosa desde PDO!";

        $juego = $_POST["juego"];
        $user = $_SESSION["id"];

        $query = $conectar->prepare("SELECT COUNT(`Id_Partida`) AS Total FROM partida WHERE `Resultado` = $user");
        $query->execute();
        $data = $query->fetchAll();

        foreach ($data as $key => $value) {
            echo $value["Total"];
        }

        

    }
    catch (PDOException $econexion) {
    print "¡Error al conectar!: " . $econexion->getMessage() . "
    ";
    die();
    }
    $conectar =null;


?>