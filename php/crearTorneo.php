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
        $admin = $_SESSION['id'];

        $query = $conectar->prepare("INSERT INTO torneig(Nom, Data, Capacitat, N_Partides, Id_Admin, Id_Videojoc) VALUES ('$nom','$data', 8, 7, $admin,$juego)");
        $query->execute();

        //Cear cuartos de final
        for($i=1; $i<=4; $i++)
        {
            $query = $conectar->prepare("INSERT INTO partida(Id_Torneig, N_Participants, Tipus) VALUES ((SELECT Id_Torneig FROM torneig WHERE Nom = '$nom'),2, 'C".$i."')");
            $query->execute(); 
        }

        $query = $conectar->prepare("SELECT Id_Partida FROM partida WHERE Id_Torneig = (SELECT Id_Torneig FROM torneig WHERE Nom = '$nom') AND Tipus LIKE 'C%'");
        $query->execute();
        $data = $query->fetchAll();

        foreach ($data as $key => $value) {
            for ($a=0; $a < 2 ; $a++) { 
                $query = $conectar->prepare("INSERT INTO pa_to_us(Id_Torneig, Id_Partida) VALUES ((SELECT Id_Torneig FROM torneig WHERE Nom = '$nom'),". $value['Id_Partida'] .")");
                $query->execute();
            }  
        }

        //Crear semifinales

        for($i=1; $i<=2; $i++)
        {
            $query = $conectar->prepare("INSERT INTO partida(Id_Torneig, N_Participants, Tipus) VALUES ((SELECT Id_Torneig FROM torneig WHERE Nom = '$nom'),2, 'S".$i."')");
            $query->execute(); 
        }

        $query = $conectar->prepare("SELECT Id_Partida FROM partida WHERE Id_Torneig = (SELECT Id_Torneig FROM torneig WHERE Nom = '$nom') AND Tipus LIKE 'S%'");
        $query->execute();
        $data = $query->fetchAll();

        foreach ($data as $key => $value) {
            for ($a=0; $a < 2 ; $a++) { 
                $query = $conectar->prepare("INSERT INTO pa_to_us(Id_Torneig, Id_Partida) VALUES ((SELECT Id_Torneig FROM torneig WHERE Nom = '$nom'),". $value['Id_Partida'] .")");
                $query->execute();
            }
        }

        //Crear semifinales


        $query = $conectar->prepare("INSERT INTO partida(Id_Torneig, N_Participants, Tipus) VALUES ((SELECT Id_Torneig FROM torneig WHERE Nom = '$nom'),2, 'F')");
        $query->execute(); 
        

        $query = $conectar->prepare("SELECT Id_Partida FROM partida WHERE Id_Torneig = (SELECT Id_Torneig FROM torneig WHERE Nom = '$nom') AND Tipus LIKE 'F'");
        $query->execute();
        $data = $query->fetchAll();

        foreach ($data as $key => $value) {
            for ($a=0; $a < 2 ; $a++) { 
                $query = $conectar->prepare("INSERT INTO pa_to_us(Id_Torneig, Id_Partida) VALUES ((SELECT Id_Torneig FROM torneig WHERE Nom = '$nom'),". $value['Id_Partida'] .")");
                $query->execute();
            }
        }
        

        

    }
    catch (PDOException $econexion) {
    print "¡Error al conectar!: " . $econexion->getMessage() . "
    ";
    die();
    }
    $conectar =null;


?>