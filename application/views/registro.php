<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAMESLEAGUE</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/css.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/registro.css">
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
    <!--DE AQUI-->
    <header class="bg-header">
        <nav class="bg-header">
            <img src="<?php echo base_url();?>img/Logo_solo_Naranja.png" alt="" class="games">
            <div class="boto">
                <button class="btn btn-warning boton fonts">Inicia sessió</button>
                <button class="btn btn-warning boton fonts">Registrarse</button>
            </div>
        </nav>
    </header>
    <!--HASTA AQUI-->
    <main>
        <section class="registro">
            <div class="container">
                <div class="box">
                    <form method="POST" action="<?php echo site_url('torneig/registro') ?>">
                        <div class="row">
                            <div class="col-12 mx-auto"><?php echo form_error("nom"); ?></div>
                            <div class="col-12 mx-auto"><?php echo form_error("email"); ?></div>
                            <div class="col-12 mx-auto"><?php echo form_error("data"); ?></div>
                            <div class="col-12 mx-auto"><?php echo form_error("user"); ?></div>
                            <div class="col-12 mx-auto"><?php echo form_error("passwd"); ?></div>
                            <div class="col-12 mx-auto"><?php echo form_error("comprov"); ?></div>
                        </div>

                        <div class="row">
                            <span class="icn col-md-12 col-sm-12 text-center lock">
                                <i class="fas fa-lock fa-9x fa-align-center"></i>
                            </span>

                            <div class="col-md-6 col-sm-12 form_group">
                                <span class="icn text-center lock">
                                    <i class="fas fa-user fa-2x fa-align-center"></i>
                                </span>
                                <?php echo form_input(['placeholder'=>'Nom','name'=>'nom','type'=>'text','class'=>'in form_filed','style'=>'color: white;']); ?>
                            </div>
                            

                            <div class="col-md-6 col-sm-12 ">
                                <span class="icn text-center lock">
                                    <i class="fas fa-at fa-2x fa-align-center"></i>
                                </span>
                                <?php echo form_input(['placeholder'=>'Email','name'=>'email','type'=>'email','class'=>'in custom-input','style'=>'color: white;']); ?>
                            </div>
                            

                            <div class="col-md-6 col-sm-12 ">
                                <span class="icn text-center lock">
                                    <i class="fas fa-calendar-minus fa-2x fa-align-center"></i>
                                </span>
                                <?php echo form_input(['name'=>'data','type'=>'date','class'=>'in','style'=>'color: white;']); ?>
                            </div>

                            <div class="col-md-6 col-sm-12 ">
                                <span class="icn text-center lock">
                                    <i class="fas fa-user-shield fa-2x fa-align-center"></i>
                                </span>
                                <?php echo form_input(['placeholder'=>'Nom Usuari','name'=>'user','type'=>'text','class'=>'in custom-input','style'=>'color: white;']); ?>
                            </div>

                            <div class="col-md-6 col-sm-12 ">
                                <span class="icn text-center lock">
                                    <i class="fas fa-key fa-2x fa-align-center"></i>
                                </span>
                                <?php echo form_input(['placeholder'=>'Contrasenya','name'=>'passwd','type'=>'password','class'=>'in custom-input','style'=>'color: white;']); ?>
                            </div>

                            <div class="col-md-6 col-sm-12 ">
                                <span class="icn text-center lock">
                                    <i class="fas fa-key fa-2x fa-align-center"></i>
                                </span>
                                <?php echo form_input(['placeholder'=>'Comprovar contrasenya','name'=>'comprov','type'=>'password','class'=>'in custom-input','style'=>'color: white;']); ?>
                            </div>
                        </div>
                        
                        <div class="m-0 row justify-content-center boto">
                            <button class="btn mx-auto btn-warning boton fonts" type="submit">Registrarse</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js " integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns " crossorigin="anonymous "></script>
    <meta name="viewport " content="width=device-width, initial-scale=1.0 ">
</body>

</html>