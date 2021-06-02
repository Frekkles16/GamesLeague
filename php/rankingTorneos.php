<?php

$host='localhost';
$basedatos='GamesLeague';
$usuario = 'root';
$contrasena = '';

session_start();

try {
    $conectar = new PDO('mysql:host='.$host.';dbname='.$basedatos, $usuario, $contrasena);
    $query = $conectar->prepare("SELECT Nom_Usuari , PuntsLol  FROM `usuari` order by PuntsLol DESC");
    $query->execute();
    $data = $query->fetchAll();

    foreach($data as $key => $value){
        $puesto = 1;
        echo '<td>' + $puesto + '</td>';
        $puesto++; 
    }

    }
    catch (PDOException $econexion) {
        print "¡Error al conectar!: " . $econexion->getMessage() . "
        ";
        die();
        }
        $conectar =null;
    
?>