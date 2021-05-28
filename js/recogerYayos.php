<?php

$host='localhost';
$basedatos='residencia';
$usuario = 'root';
$contrasena = '';

try {
    $conectar = new PDO('mysql:host='.$host.';dbname='.$basedatos, $usuario, $contrasena);
    //print "Conexión exitosa desde PDO!";

    $query = $conectar->prepare("SELECT `ID`, `Nombre`, `Apellido`, `Edad`, FROM yayos");
    $query->execute();
    $data = $query->fetchAll();

        foreach ($data as $valores):
            echo "<tr>
                <td>". $valores["Id"]."</td>
                <td>". $valores["Nombre"]."</td>
                <td>". $valores["Apellido"]."</td>
                <td>". $valores["Edad"]."</td>";
                "<td> <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal' Onclick='modificar(".$valores["Id"].")'>Modifcar</button> </td>";
                
            echo "</tr>";
        endforeach;


    }
    catch (PDOException $econexion) {
    print "¡Error al conectar!: " . $econexion->getMessage() . "
    ";
    die();
    }
    $conectar =null;


?>