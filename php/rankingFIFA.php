<?php

$host='localhost';
$basedatos='gamesleague';
$usuario = 'root';
$contrasena = '';

session_start();

try {
    header("Access-Control-Allow-Origin: *");
    $conectar = new PDO('mysql:host='.$host.';dbname='.$basedatos, $usuario, $contrasena);
    $query = $conectar->prepare("SELECT Nom_Usuari , PuntsFifa  FROM usuari order by PuntsFifa DESC");
    $query->execute();
    $data = $query->fetchAll();
    $puesto = 1;
    foreach($data as $key => $value){
    
        echo '<tr class="gray_tabla"> <td>' . $puesto . '</td> <td>' .  $value["Nom_Usuari"] . '</td> <td>' .  $value["PuntsFifa"] . '</td> </tr>';
        /*echo '<tr class="gray_tabla"><th> ' + number_format($puesto) + ' </th><th>Hola</th><th>Hola</th></tr>';*/
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