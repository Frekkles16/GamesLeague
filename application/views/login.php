<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAMESLEAGUE</title>
    <link rel="stylesheet" href="<?php echo base_url();?>css/css.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/registro.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css">
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
    <header>
        <nav class="navbar navbar-expand-lg navbar-light navbar-dark">
          <!--<a class="navbar-brand" href="#"><img src="<?php echo base_url(); ?>img/Logo_solo_Naranja.png" alt="" class="games"></a>-->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav ml-auto " style="margin: 5px;">
              <li class="nav-item active">
                <a class="nav-link f-size-s" href="<?php echo site_url('torneig/inici')?>">Inici</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  f-size-s" href="<?php echo site_url('torneig/registro') ?>">Registrarse</a>
              </li>
            </ul>
          </div>
        </nav>
    </header>
    <!--HASTA AQUI-->
    <main>
        <section class="registro">
            <div class="container">
                <div class="box" style="padding: 75px;">
                    <form method="POST" action="<?php echo site_url('torneig/login') ?>">
                        <div class="row">
                            <div class="col-12 mx-auto"><?php echo form_error("user"); ?></div>
                            <div class="col-12 mx-auto"><?php echo form_error("passwd"); ?></div>
                        </div>

                        <div class="row">
                            <span class="icon col-md-12 col-sm-12 text-center lock" style="margin-bottom: 50px;">
                                <i class="fas fa-user fa-9x fa-align-center"></i>
                            </span>
                            <div class="col-md-12 col-sm-12 form_group">
                                <span class="icon text-center lock">
                                    <i class="fas fa-user-shield fa-2x fa-align-center"></i>
                                </span>
                                <?php echo form_input(['placeholder'=>'Usuari','name'=>'user','type'=>'text','class'=>'in form_filed','style'=>'color: white;']); ?>
                            </div>
                            <div class="col-md-12 col-sm-12 " style="margin-bottom: 50px;">
                                <span class="icon text-center lock">
                                    <i class="fas fa-key fa-2x fa-align-center"></i>
                                </span>
                                <?php echo form_input(['placeholder'=>'Contrasenya','name'=>'passwd','type'=>'password','class'=>'in custom-input','style'=>'color: white;']); ?>
                            </div>
                        </div>
                        <div class="m-0 row justify-content-center boto">
                            <button class="btn mx-auto btn-warning boton fonts" type="submit">Iniciar sessió</button>
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