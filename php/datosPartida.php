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

        $query = $conectar->prepare("SELECT Id_Partida, Fitxer, TipusF FROM partida WHERE Id_Torneig = " .$torneo. " AND Tipus = '" . $tipus . "'");
        $query->execute();
        $data = $query->fetchAll();

        foreach ($data as $key => $value) {
            if ($value['Fitxer'] != NULL) {
                echo '<br> <img class="mx-auto w-100" src="data:'.$value["TipusF"].';base64,'.base64_encode($value["Fitxer"]) .'" alt="Card image cap">';
            }else
            {
                echo "<p style='color: white; margin-top: 10px;'>No hi ha imatge pujada encara</p>";
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