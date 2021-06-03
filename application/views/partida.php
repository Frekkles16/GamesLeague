<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAMESLEAGUE</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/css.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/partidas.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/admin.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css">
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
        <section>
            <?php foreach ($partida->result_array() as $value): ?>
            <h1 class="nombre" style="text-align: center;"><?php echo $value['Tipus']; ?></h1>
            <div class="container">
                <div class="row">
                    <div class="box r">
                        <div class="col-md-12">
                            
                            <h1 class="nombre"> <?php echo $value['Nom']; ?></h1>
                             
                        </div>
                        <h1 style="color: yellow;"><?php if($value['Resultado'] == NULL){
                            echo "Partida en curs";
                            }else{
                                echo "Partida Finalitzada";
                            }
                         ?></h1>
                        <?php endforeach;?>

                        <?php foreach ($jugadors->result_array() as $value): ?>
                            <div class="col-md-6 col-sm-12 col-6 responsive">
                                <div class="foto-perfil partida2">
                                    <img src="<?php echo base_url(); ?>img/Logo_solo_Negro.png" alt="" srcset="" class="foto">
                                </div>
                                <p class="style partida2 n1"><?php echo $value['Nom_Usuari'] ?></p>
                            </div>

                        <?php endforeach; ?>

                        <div class="col-md-12 col-sm-12 col-12">
                            <h2 class="fonts input res">Cuartos de final</h2>
                        </div>

                        <div class="col-md-12 const text-center p-1">
                             <?php
                               foreach ($partida->result_array() as $value): 
                               if($value['Fitxer'] == NULL)
                               {
                                    echo form_open_multipart('torneig/archivoUp/' . $nPartida);

                                    echo form_upload(['name'=>'arxiu','class'=>'d-block form-control mb-1 p-5 const text-center']);
                                    echo form_error("arxiu"); 
                                    echo form_submit(['name'=>'boto','class'=>'btn btn-warning fonts mt-4 text-center ','value'=>'Pujar Archiu']);
                                
                                    echo form_close();
                               }else{
                                echo "<h3 style='Color: white;'>Ja hi ha arxiu pujat</h3>";
                               }   
                                    
                            endforeach;
                            ?>
                       </div>
                         <!-- <form method="POST" action="<?php echo site_url('torneig/miPartida/') ?>">
                            <div class="input">
                                <input style="color: white;" class="mx-auto" type="file" name="resultado" id="resultado">
                            </div>
                       
                            <div class="m-0 row justify-content-center boto">
                                <button class="btn mx-auto btn-warning boton fonts">Enviar resultado</button>
                            </div>
                        </form> -->

                    </div>
                </div>
            </div>
        </section>
    </main>
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