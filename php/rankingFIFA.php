<?php

$host='localhost';
$basedatos='GamesLeague';
$usuario = 'root';
$contrasena = '';

session_start();

try {
    $conectar = new PDO('mysql:host='.$host.';dbname='.$basedatos, $usuario, $contrasena);
    $query = $conectar->prepare("SELECT Nom_Usuari , PuntsFifa FROM `usuari` order by PuntsFifa DESC")

    }
    catch (PDOException $econexion) {
        print "¡Error al conectar!: " . $econexion->getMessage() . "
        ";
        die();
        }
        $conectar =null;
    
?>