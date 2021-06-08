<?php

$host='localhost';
$basedatos='GamesLeague';
$usuario = 'root';
$contrasena = '';

session_start();

try {
        $conectar = new PDO('mysql:host='.$host.';dbname='.$basedatos, $usuario, $contrasena);

        $tipus = $_POST['tipo'];
        $torneo = $_POST['torneo'];
        $ganador = $_POST['ganador'];

        $query = $conectar->prepare("UPDATE partida SET Resultado = $ganador WHERE Id_Partida = (SELECT Id_Partida FROM partida WHERE Id_Torneig = " .$torneo. " AND Tipus = '" . $tipus . "')");
        $query->execute();

        if ($tipus == 'C1') {
            $query = $conectar->prepare("UPDATE usuari SET PuntsLol = (SELECT PuntsLol + 20 FROM Usuari WHERE Id_Usuari = $ganador) WHERE Id_Usuari = $ganador");
            $query->execute();

            $query = $conectar->prepare("UPDATE pa_to_us SET Id_Usuari = $ganador WHERE Id_Pa_To_Us = (SELECT MIN(Id_Pa_To_Us) FROM pa_to_us WHERE Id_Partida = (SELECT Id_Partida FROM partida WHERE Tipus = 'S1' AND Id_Torneig = $torneo))");
            $query->execute();

        }elseif ($tipus == 'C2') {
            $query = $conectar->prepare("UPDATE usuari SET PuntsLol = (SELECT PuntsLol + 20 FROM Usuari WHERE Id_Usuari = $ganador) WHERE Id_Usuari = $ganador");
            $query->execute();
            
            $query = $conectar->prepare("UPDATE pa_to_us SET Id_Usuari = $ganador WHERE Id_Pa_To_Us = (SELECT MAX(Id_Pa_To_Us) FROM pa_to_us WHERE Id_Partida = (SELECT Id_Partida FROM partida WHERE Tipus = 'S1' AND Id_Torneig = $torneo))");
            $query->execute();

        }elseif ($tipus == 'C3') {
            $query = $conectar->prepare("UPDATE usuari SET PuntsLol = (SELECT PuntsLol + 20 FROM Usuari WHERE Id_Usuari = $ganador) WHERE Id_Usuari = $ganador");
            $query->execute();
            
            $query = $conectar->prepare("UPDATE pa_to_us SET Id_Usuari = $ganador WHERE Id_Pa_To_Us = (SELECT MIN(Id_Pa_To_Us) FROM pa_to_us WHERE Id_Partida = (SELECT Id_Partida FROM partida WHERE Tipus = 'S2' AND Id_Torneig = $torneo))");
            $query->execute();

        }elseif ($tipus == 'C4') {
            $query = $conectar->prepare("UPDATE usuari SET PuntsLol = (SELECT PuntsLol + 20 FROM Usuari WHERE Id_Usuari = $ganador) WHERE Id_Usuari = $ganador");
            $query->execute();
            
            $query = $conectar->prepare("UPDATE pa_to_us SET Id_Usuari = $ganador WHERE Id_Pa_To_Us = (SELECT MAX(Id_Pa_To_Us) FROM pa_to_us WHERE Id_Partida = (SELECT Id_Partida FROM partida WHERE Tipus = 'S2' AND Id_Torneig = $torneo))");
            $query->execute();

        }elseif ($tipus == 'S1') {
            $query = $conectar->prepare("UPDATE usuari SET PuntsLol = (SELECT PuntsLol + 50 FROM Usuari WHERE Id_Usuari = $ganador) WHERE Id_Usuari = $ganador");
            $query->execute();
            
            $query = $conectar->prepare("UPDATE pa_to_us SET Id_Usuari = $ganador WHERE Id_Pa_To_Us = (SELECT MIN(Id_Pa_To_Us) FROM pa_to_us WHERE Id_Partida = (SELECT Id_Partida FROM partida WHERE Tipus = 'F' AND Id_Torneig = $torneo))");
            $query->execute();
        }elseif ($tipus == 'S2') {
            $query = $conectar->prepare("UPDATE usuari SET PuntsLol = (SELECT PuntsLol + 50 FROM Usuari WHERE Id_Usuari = $ganador) WHERE Id_Usuari = $ganador");
            $query->execute();
            
            $query = $conectar->prepare("UPDATE pa_to_us SET Id_Usuari = $ganador WHERE Id_Pa_To_Us = (SELECT MAX(Id_Pa_To_Us) FROM pa_to_us WHERE Id_Partida = (SELECT Id_Partida FROM partida WHERE Tipus = 'F' AND Id_Torneig = $torneo))");
            $query->execute();
        }elseif ($tipus == 'F') {
            $query = $conectar->prepare("UPDATE torneig SET Ganador = $ganador WHERE Id_Torneig = $torneo");
            $query->execute();

            $query = $conectar->prepare("UPDATE usuari SET PuntsLol = (SELECT PuntsLol + 100 FROM Usuari WHERE Id_Usuari = $ganador) WHERE Id_Usuari = $ganador");
        $query->execute();
        }


    }
    catch (PDOException $econexion) {
    print "¡Error al conectar!: " . $econexion->getMessage() . "
    ";
    die();
    }
    $conectar =null;


?>