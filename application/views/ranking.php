<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAMESLEAGUE</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/css.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/ranking.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/admin.css">
    <script src="<?php echo base_url(); ?>js/ranking.js"></script>
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
        <nav class="">
            <input type="checkbox" id="abrir-cerrar" name="abrir-cerrar" value="">
            <label for="abrir-cerrar">&#9776; <span class="abrir">Obrir</span><span class="cerrar">Tancar</span></label>
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
        <div class="switch-button display">
            <!-- Checkbox -->
            <p class="fonts dis">FIFA</p>
            <input type="checkbox" name="switch-button" id="switch-label" class="switch-button__checkbox" onclick="load_ranking('<?php echo base_url(); ?>')">
            <!-- Botón -->
            <label for="switch-label" class="switch-button__label"></label>
            <p class="fonts dis">LOL</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 tablas tabla margin" style="margin-bottom:300px">
                    <div class="tabla center-block">
                        <h1 class="nombre">Ranking</h1>
                        <p class="f" id="nombre"></p>
                        <table class="table tabla default font btm fontb" id="tabla">
                            <!--<tr class="top_tabla">
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
                            <tr class="white_tabla">
                                <th>
                                    4
                                </th>
                                <th>
                                    Jugador 4
                                </th>
                                <th>
                                    400
                                </th>
                            </tr>
                            <tr class="gray_tabla">
                                <th>
                                    5
                                </th>
                                <th>
                                    Jugador 5
                                </th>
                                <th>
                                    400
                                </th>
                            </tr>
                            <tr class="white_tabla">
                                <th>
                                    6
                                </th>
                                <th>
                                    Jugador 6
                                </th>
                                <th>
                                    400
                                </th>
                            </tr>
                            <tr class="gray_tabla">
                                <th>
                                    7
                                </th>
                                <th>
                                    Jugador 7
                                </th>
                                <th>
                                    400
                                </th>
                            </tr>
                            <tr class="white_tabla">
                                <th>
                                    8
                                </th>
                                <th>
                                    Jugador 8
                                </th>
                                <th>
                                    400
                                </th>
                            </tr>
                            <tr class="gray_tabla">
                                <th>
                                    9
                                </th>
                                <th>
                                    Jugador 9
                                </th>
                                <th>
                                    400
                                </th>
                            </tr>
                            <tr class="white_tabla">
                                <th>
                                    10
                                </th>
                                <th>
                                    Jugador 10
                                </th>
                                <th>
                                    400
                                </th>
                            </tr>
                            <tr class="top_tabla">
                                <th>
                                    25
                                </th>
                                <th>
                                    Jugador 25
                                </th>
                                <th>
                                    400
                                </th>
                            </tr>-->
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        load_ranking('<?php echo base_url(); ?>');
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js " integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns " crossorigin="anonymous "></script>
    <meta name="viewport " content="width=device-width, initial-scale=1.0 ">
</body>
</html>