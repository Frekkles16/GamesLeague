<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAMESLEAGUE</title>
    <link rel="stylesheet" href = "<?php echo base_url(); ?>css/css.css">
    <link rel="stylesheet" href = "<?php echo base_url(); ?>css/bootstrap.css">
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
    <header>
        <nav class="navbar navbar-expand-lg navbar-light navbar-dark">
          <a class="navbar-brand" href="#"><img src="<?php echo base_url(); ?>img/Logo_solo_Naranja.png" alt="" class="games"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav ml-auto ">
              <li class="nav-item active">
                <a class="nav-link  fonts " href="<?php echo site_url('torneig/login')?>">Inicia sessió</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  fonts" href="<?php echo site_url('torneig/registro') ?>">Registrarse</a>
              </li>
            </ul>
          </div>
        </nav>
    </header>



    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 Logo_texto_Naranja">
                <img src="<?php echo base_url(); ?>img/Logo_texto_Naranja.png" alt="" class="imgrande">
                <h1 class="fonts size">Juga tornejos i guanya punts els tornejos més competitius.</h1>
            </div>
        
            <div class="col-md-6 col-sm-12" >   
                <table class="table">
                    <thead>
                        <tr>
                          <th style="border-bottom: 0px !important; padding: 0px !important;" scope="col"><img src="<?php echo base_url(); ?>img/leagueoflegends.jpg" alt="" class="imag img-fluid center-block"></th>
                          <th style="border-bottom: 0px !important; padding: 0px !important;" scope="col"><img src="<?php echo base_url(); ?>img/LOL1.jpg" alt="" class="imag img-fluid center-block"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td style="border-top: 0px !important; padding: 0px !important" scope="row"><img src="<?php echo base_url(); ?>img/mbappe.jpg" alt="" class="imag img-fluid center-block"></td>
                          <td style="border-top: 0px !important; padding: 0px !important" scope="row"><img src="<?php echo base_url(); ?>img/fifa21.jpg" alt="" class="imag img-fluid center-block"></th>
                        </tr>
                    </tbody>
                </table>
            </div> 

        </div>
        
    </div>

    <div class="rank container-fluid">
        <div class="row">
            <div class="col-12 center-block">
                <h2 class="h2" style="margin-bottom: 75px;">Ranking</h2>
                <p class="fonts">Aqui veurem el millors jugadors al seu respectiu joc</p>
            </div>
            
            <div class="col-md-6 col-sm-12 tablas tabla" style="margin-bottom:300px">
                <div class="tabla center-block">
                    <p class="fonts1">LOL</p>
                    <table class="table tabla default font btm fontb">
                        <tr class="top_tabla">
                            <td>
                                Puesto
                            </td>
                            <td>
                                Nombre de usuario
                            </td>
                            <td>
                                Puntuación
                            </td>
                        </tr>
                        <tr class="gray_tabla">
                            <th>
                                1
                            </th>
                            <th>
                                Jugador 1
                            </th>
                            <th>
                                500
                            </th>
                        </tr>
                        <tr class="white_tabla">
                            <th>
                                2
                            </th>
                            <th>
                                Jugador 2
                            </th>
                            <th>
                                450
                            </th>
                        </tr>
                        <tr class="gray_tabla">
                            <th>
                                3
                            </th>
                            <th>
                                Jugador 3
                            </th>
                            <th>
                                400
                            </th>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 tablas tabla" style="margin-bottom:300px">
                <div class="tabla center-block">
                    <p class="fonts1">FIFA</p>
                    <table class="table tabla default font btm fontb">
                        <tr class="top_tabla">
                            <td class="">
                                Puesto
                            </td>
                            <td>
                                Nombre de usuario
                            </td>
                            <td>
                                Puntuación
                            </td>
                        </tr>
                        <tr class="gray_tabla ">
                            <th>
                                1
                            </th>
                            <th>
                                Jugador 1
                            </th>
                            <th>
                                500
                            </th>
                        </tr>
                        <tr class="white_tabla">
                            <th>
                                2
                            </th>
                            <th>
                                Jugador 2
                            </th>
                            <th>
                                450
                            </th>
                        </tr>
                        <tr class="gray_tabla">
                            <th>
                                3
                            </th>
                            <th>
                                Jugador 3
                            </th>
                            <th>
                                400
                            </th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
        
        <div class="iconos ">´
            <h1 class="h2 marg mob text-center" style="margin-bottom: 75px;">Una web de tornejos que pensa en tu</h1>
            <div class="mid">
                <div class="icn col-md-4 col-sm-12 centrar text-center">
                    <span>
                        <i class="fas fa-chart-bar fa-9x fa-align-center"></i>
                    </span>
                    <p class="fonts m">Seguiment d'estadístiques personals diferenciades en cada joc</p>
                </div>
                <div class="icn col-md-4 col-sm-12 text-center">
                    <span>
                        <i class="fas fa-gamepad fa-9x fa-align-center"></i>
                    </span>
                    <p class="fonts m">Competitivitat amb total respecte entre adversaris</p>
                </div>
                <div class="icn col-md-4 col-sm-12 text-center">
                    <span>
                        <i class="fas fa-user-times fa-9x fa-align-center"></i>
                    </span>
                    <p class="fonts m">Seguridad ante los competidores que ponen falsos resultados</p>
                </div>
            </div>
        </div>
    </div>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <meta name="viewport " content="width=device-width, initial-scale=1.0 ">
</body>

</html>