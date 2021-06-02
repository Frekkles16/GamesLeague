<?php

$host='localhost';
$basedatos='GamesLeague';
$usuario = 'root';
$contrasena = '';

session_start();

try {
        $conectar = new PDO('mysql:host='.$host.';dbname='.$basedatos, $usuario, $contrasena);
        //print "Conexión exitosa desde PDO!";

        $nom = $_POST["user"];
        $passwd = $_POST["passw"];

        $query = $conectar->prepare("INSERT INTO admin(Nom, Contrasenya) VALUES ('$nom','$passwd')");
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