<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAMESLEAGUE</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/css.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/clasificacion.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/admin.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- <link rel="apple-touch-icon" href="apple-touch-icon.png"> -->
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
    <section class="col-md-12 col-sm-12 bg-reglas">
        <h1 class="fonts fonts1">
            Reglas de torneig
        </h1>
        <h2 class="fonts fonts2">
            Format de torneig
        </h2>
        <p class="fonts fonts3">
            Eliminatòria de 16 equips que es s'aniran enfrontant entre ells
        </p>
        <h2 class="fonts fonts2">
            Plantilles
        </h2>
        <p class="fonts fonts3">
            Las plantillas deben ser las plantillas actualizadas, de no ser así habría penalización
        </p>
        <h2 class="fonts fonts2">
            PARTIT FINALITZAT AMB EMPAT
        </h2>
        <p class="fonts fonts3">
            Si el partit finalitza amb empat, s'hauria de jugar la prorroga, si després els 30 minuts extres segueix l'empat arribaríem a penals
        </p>
    </section>
    <h1 class="mx-auto" style="text-align: center; color: white;">Cuartos de final</h1>
    <div class="cuadro r">

        <?php 

        $cont = 0;
        for ($i = 0; $i < 4; $i++){ ?>
            <div class="col-md-6 col-sm-6 col-6 m mx-auto md" style="padding: 40px; display: inline-flex; margin-right: 30px;">
            <?php for ($j = 0; $j < 2; $j++){ ?>
                <?php $a =  $jugadors->result_array()  ?>
                    <p style="color: white;"> <?php echo $a[$cont]['Nom_Usuari'] ?></p>
                    <hr color="white" style="margin-right: 10px;" width="100px">
            <?php $cont++; } ?>
            </div>
        <?php } ?>

    </div>

    <?php echo "hola" ?>
    <h1 class="mx-auto" style="text-align: center; color: white; margin-left: 50px;">Semifinal</h1>
    <div class="row cuadro ">
        <div class="col-md-6 col-sm-6 col-6 cuadro mx-auto" style="display: inline-flex;margin: 0 auto;">
            <div class="col-md-6 col-sm-6 m mx-auto" style="padding: 40px; display: inline-flex; margin-right: 30px;">
                <p style="color: white;"></p>
                <hr color="white" style="margin-right: 20px;" width="100px">
                <hr color="white" width="100px">
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-6 cuadro mx-auto" style="display: inline-flex;margin: 0 auto;">
            <div class="col-md-6 col-sm-6 m mx-auto" style="padding: 40px; display: inline-flex; margin-right: 30px;">
                <p style="color: white;"></p>
                <hr color="white" style="margin-right: 20px;" width="100px">
                <hr color="white" width="100px">
            </div>
        </div>
    </div>
    <h1 class="mx-auto" style="text-align: center; color: white;">Final</h1>
    <div class="row cuadro">
        <div class="col-md-6 col-sm-6 col-6 cuadro mx-auto" style="display: inline-flex;margin: 0 auto;">
            <div class="col-md-6 col-sm-6 m mx-auto" style="padding: 40px; display: inline-flex; margin-right: 30px;">
                <p style="color: white;"></p>
                <hr color="white" style="margin-right: 20px;" width="100px">
                <hr color="white" width="100px">
            </div>
        </div>
    </div>
    <h1 class="mx-auto" style="text-align: center; color: white;">Ganador</h1>
    <div class="row cuadro">
        <div class="col-md-6 col-sm-6 col-6 cuadro mx-auto" style="display: inline-flex;margin: 0 auto;">
            <div class="col-md-6 col-sm-6 m mx-auto" style="padding: 40px; display: inline-flex; margin-right: 30px;">
                <p style="color: white;"></p>
                <hr color="white" style="margin-right: 20px;" width="100px">
                <hr color="white" width="100px">
            </div>
        </div>
    </div>
    <footer class="bg-footer">
        <div class="bg-footer">
            <hr color="#FF5E00" style="margin-top: 300px; " size="0.5px ">
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