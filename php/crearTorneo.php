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
        $nom = $_POST["nom"];
        $data = $_POST["data"];

        $query = $conectar->prepare("INSERT INTO torneig(Nom, Data, Capacitat, N_Partides, Id_Admin, Id_Videojoc) VALUES ('$nom','$data', 8, 7, 1,$juego)");
        $query->execute();
        // $data = $query->fetchAll();

        

        

    }
    catch (PDOException $econexion) {
    print "¡Error al conectar!: " . $econexion->getMessage() . "
    ";
    die();
    }
    $conectar =null;


?>