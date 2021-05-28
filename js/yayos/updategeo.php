<?php


try {
    $conectar = new mysqli("localhost", "root", "", "residencia");
    //print "Conexión exitosa desde PDO!";
    session_start();

    $id = $_SESSION['id'];
    $longitud = $_POST["longitud"];
    $latitud = $_POST["latitud"];


    $query = "UPDATE yayos SET Longitud = '$longitud', Latitud = '$latitud' WHERE ID LIKE $id";
    $data = $conectar->query($query);
   
    }
    catch (PDOException $econexion) {
    print "¡Error al conectar!: " . $econexion->getMessage() . "
    ";
    die();
    }
    $conectar =null;

?>