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

        $query = $conectar->prepare("SELECT Id_Partida FROM partida WHERE Id_Torneig = " .$torneo. " AND Tipus = '" . $tipus . "'");
        $query->execute();
        $data = $query->fetchAll();

        foreach ($data as $key => $value) {
                $query = $conectar->prepare("SELECT `compte`.`Nom_Compte`, `usuari`.`Id_Usuari` FROM `pa_to_us` LEFT JOIN `usuari` ON `usuari`.`Id_Usuari` = `pa_to_us`.`Id_Usuari` LEFT JOIN `compte` ON `compte`.`Id_Usuari` = `usuari`.`Id_Usuari` LEFT JOIN `videojoc` ON `compte`.`Id_Videojoc` = `videojoc`.`Id_Videojoc` WHERE `pa_to_us`.`Id_Partida` = '" . $value["Id_Partida"] . "' AND videojoc.Id_Videojoc = (SELECT Id_Videojoc FROM torneig LEFT JOIN partida ON torneig.Id_Torneig = partida.Id_Torneig WHERE partida.Id_Partida = " . $value['Id_Partida'] . ")");
                $query->execute();

                $data2 = $query->fetchAll();

                foreach ($data2 as $key => $value) {
                    echo '<option value="' . $value["Id_Usuari"] . '">' . $value["Nom_Compte"] . ' </option>';
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