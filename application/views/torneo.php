<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAMESLEAGUE</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/css.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/torneos.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/admin.css">

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
    <main>
        <section>
            <h1 class="font">El teus Torneijos</h1>
        </section>
        <?php foreach ($mis_torneos->result_array() as $value): ?>
            <form method="GET" action="<?php echo site_url('torneig/miPartida/' . $value['Id_Torneig'] ) ?>">
                <div class="row box">
                    <div class="col-md-3 col-sm-3 fonts rt">
                        <h2>Nom torneig</h2>
                        <p class="nombre"><?php echo $value['Nom']?></p>
                    </div>
                    <div class="col-md-3 col-sm-3 fonts rt">
                        <h2>Data</h2>
                        <p class="nombre"><?php echo $value['Data']?></p>
                    </div>
                    <div class="col-md-3 col-sm-3 fonts rt">
                        <h2>Joc</h2>
                        <p class="nombre"><?php echo $value['Nom_Videojoc']?></p>
                    </div>
                    <div class="col-md-3 col-sm-3 ">
                        <button class="btn-style">Veure partida</button>
                    </div>
                </div>
            </form>
        <?php endforeach ?>
            
        <section>
            <h1 class="font">Tots els tornejos</h1>
        </section>
        <?php foreach ($torneos_all->result_array() as $value): ?>
            <form method="GET" action="<?php echo site_url('torneig/inscripcio/' . $value['Id_Torneig'] ) ?>">
                <div class="row box">
                    <div class="col-md-3 col-sm-3 fonts rt">
                        <h2>Nom torneig</h2>
                        <p class="nombre"><?php echo $value['Nom']?></p>
                    </div>
                    <div class="col-md-3 col-sm-3 fonts rt">
                        <h2>Data</h2>
                        <p class="nombre"><?php echo $value['Data']?></p>
                    </div>
                    <div class="col-md-3 col-sm-3 fonts rt">
                        <h2>Joc</h2>
                        <p class="nombre"><?php echo $value['Nom_Videojoc']?></p>
                    </div>
                    <div class="col-md-3 col-sm-3 ">
                        <button class="btn-style">Inscribir-se</button>
                    </div>
                </div>
            </form>
        <?php endforeach ?>

    </main>
    <footer class="bg-footer">
        <div class="bg-footer">
            <hr color="#FF5E00 " style="margin-top: 300px; " size="0.5px ">
            <div class="col-md-3 col-sm-12 ">
                <p class="pfoot ">LA MEJOR WEB DE TORNEOS PARA COMPETIR</p>
            </div>
            <div class="col-md-3 col-sm-12 ">
                <p class="fontf ">Privacidad</p>
            </div>
            <div class="col-md-3 col-sm-12 ">
                <p class="fontf ">Condiciones</p>
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