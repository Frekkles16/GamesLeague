<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAMESLEAGUE</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/css.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/perfil.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/admin.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css">
    <script src="<?php echo base_url(); ?>js/perfil.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4a7f456fac.js" crossorigin="anonymous"></script>
</head>

<body>
    <!--DE AQUI-->
    <header class="">
        <nav class="bg-header">
            <input type="checkbox" id="abrir-cerrar" name="abrir-cerrar" value="">
            <label for="abrir-cerrar">&#9776; <span class="abrir">Abrir</span><span class="cerrar">Cerrar</span></label>
            <div id="sidebar" class="sidebar">
                <ul class="menu">
                    <li><a href="<?php echo site_url('torneig/perfil')?>">El teu perfil</a></li>
                    <li><a href="<?php echo site_url('torneig/ranking') ?>">Ranking</a></li>
                    <li><a href="<?php echo site_url('torneig/torneig')?>">Tornejos</a></li>
                    <li><a href="<?php echo site_url('torneig/logout')?>" style="color: red;">Log Out</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <!--HASTA AQUI-->

    <main class="back">
        <section class="perfil col-md-2 col-sm-6">
            <div class="foto-perfil">
                <img src="<?php echo base_url(); ?>img/Logo_solo_Negro.png" alt="" srcset="" class="foto">
            </div>
        </section>
        <section class="perfil col-md-10 col-sm-6">
            <div class="container p">
                <div class="box perfil-padding">
                    <?php 
                    foreach($mios->result_array() as $valor) 
                    {
                      
                       echo '<p class="foto-perfil-p">' . $valor['Nom_Usuari'] . ' </p>';
                       echo "<br>";
                       
                       echo '<p class="foto-perfil-p">' . $valor['Nom'] . ' </p>';
                    }
                     ?>
                </div>
            </div>
        </section>
    </main>
    <br>
    <div class="perfil-body">
        <p class="fonts">Seleciona el joc per veure les teves estadístiques </p>
        <div class="select mx-auto" style="width:150px;">
            <select onchange="cargar('<?php echo base_url(); ?>')" id="juego">
              <option value="0" class="">Selecciona:</option>
              <option value="1" class="">LOL</option>
              <option value="2" class="">FIFA</option>
            </select>
        </div>
    </div>
    <div class="tabla mx-auto row">
        <div class="col-md-3 col-sm-12 tablas-col">
            Tornejos jugats
            <p class="mx-auto" id="t_jugados">-</p>
        </div>
        <div class="col-md-3 col-sm-12 tablas-col">
            Partides jugades
            <p class="mx-auto" id="p_jugadas" >-</p>
        </div>
        <div class="col-md-3 col-sm-12 tablas-col">
            Tornejos Guanyats
            <p class="mx-auto" id="torneos_w">-</p>
        </div>
        <div class="col-md-3 col-sm-12 tablas-col">
            Partides Guanyades
            <p class="mx-auto" id="partidas_w">-</p>
        </div>

    </div>
    <footer class="bg-footer">
        <div class="bg-footer">
            <hr color="#FF5E00 " style="margin-top: 300px; " size="0.5px ">
            <div class="col-md-3 col-sm-12 ">
                <p class="pfoot ">LA MILLOR WEB DE TORNEJOS PER COMPETIR</p>
            </div>
            <div class="col-md-3 col-sm-12 ">
                <p class="fontf ">Privacitat</p>
            </div>
            <div class="col-md-3 col-sm-12 ">
                <p class="fontf ">Condicions</p>
            </div>
            <div class="col-md-3 col-sm-12 ">
                <p class="copy">Copyright 2021 GAMESLEAGUE</p>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js " integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns " crossorigin="anonymous "></script>
    <meta name="viewport " content="width=device-width, initial-scale=1.0 ">
</body>

</html>