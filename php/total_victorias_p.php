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

        $query = $conectar->prepare("SELECT COUNT( `pa_to_us`.`Id_Partida`) AS 'Torneos' FROM `pa_to_us` INNER JOIN `torneig` ON `pa_to_us`.`Id_Torneig` = `torneig`.`Id_Torneig` INNER JOIN `partida` ON `pa_to_us`.`Id_Partida` = `partida`.`Id_Partida` WHERE `pa_to_us`.`Id_Usuari`= $user AND `torneig`.`Id_Videojoc`= $juego AND `partida`.`Resultado` LIKE 'W' ");
        $query->execute();
        $data = $query->fetchAll();

        foreach ($data as $key => $value) {
            echo $value["Torneos"];
        }

        

    }
    catch (PDOException $econexion) {
    print "¡Error al conectar!: " . $econexion->getMessage() . "
    ";
    die();
    }
    $conectar =null;


?>