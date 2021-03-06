<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/css.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/admin.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css">
    <script src="<?php echo base_url(); ?>js/admin.js"></script>
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
    <header class="bg-header">
        <nav class="bg-header">
            <input type="checkbox" id="abrir-cerrar" name="abrir-cerrar" value="">
            <label for="abrir-cerrar">&#9776; <span class="abrir">Obrir</span><span class="cerrar">Tancar</span></label>
            <div id="sidebar" class="sidebar">
                <ul class="menu">
                    <li><a href="#crear">Crear torneig</a></li>
                    <li><a href="#modificar">Modificar torneig</a></li>
                    <li><a href="#eliminar">Eliminar torneig</a></li>
                    <li><a href="#usuario">Crear usuari administrador</a></li>
                    <li><a href="#eliminarusu">Eliminar torneig</a></li>
                    <li><a href="<?php echo site_url('torneig/logout')?>" style="color: red;">Log Out</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <section id="crear">
            <div style="margin-top: 100px;" class="container">
                <div class="box">
                    <h1 class="nombre">Crear torneig</h1>
                    <form">

                        <select name="juego" id="juego">
                            <option value="1" class="">LOL</option>
                            <option value="2" class="">FIFA</option>
                        </select>
                    
                        <div class="row">
                            <div class="col-md-6 col-sm-12 form_group">
                                <span class="icon text-center lock">
                                    <i class="fas fa-user fa-2x fa-align-center"></i>
                                </span>
                                <input class="in" type="text" name="nom" id="nom" placeholder="Nom del torneig" style="color: white;">
                            </div>

                            <div class="col-md-6 col-sm-12 ">
                                <span class="icon text-center lock">
                                    <i class="fas fa-calendar-minus fa-2x fa-align-center"></i>
                                </span>
                                <input class="in" type="date" name="data" id="data" placeholder="" style="color: white;" class="">
                            </div>

                        </div>
                        <div class="m-0 row justify-content-center boto">
                            <button class="btn mx-auto btn-warning boton fonts" onclick="crearTorneo('<?php echo base_url(); ?>')">Crear torneig</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section id="modificar">
            <div style="margin-top: 100px;" class="container">
                <div class="box">
                    <h1 class="nombre">Modificar torneig</h1>
                    
                    <form>
                        <h1 class="fonts">Selecciona el torneig a modificar</h1>
                        <select onchange="datos_update('<?php echo base_url(); ?>')" id="torneos">
                            <option value="" class="">Selecciona:</option>
                        </select>
                        <br><br><br>    
                        <select id="u_juego">
                            <option value="0" class=""></option>
                            <option value="1" class="">LOL</option>
                            <option value="2" class="">FIFA</option>
                        </select>

                        <div class="row">
                            <div class="col-md-6 col-sm-12 form_group">
                                <span class="icon text-center lock">
                                    <i class="fas fa-user fa-2x fa-align-center"></i>
                                </span>
                                <input class="in" type="text" name="nom" id="u_nom" placeholder="Nom del torneig" style="color: white;">
                            </div>
                            <div class="col-md-6 col-sm-12 ">
                                <span class="icon text-center lock">
                                    <i class="fas fa-calendar-minus fa-2x fa-align-center"></i>
                                </span>
                                <input class="in" type="date" id="u_data" placeholder="" style="color: white;" class="">
                            </div> 
                        </div>
                        <div class="m-0 row justify-content-center boto">
                            <button class="btn mx-auto btn-warning boton fonts" onclick="modificarTorneo('<?php echo base_url(); ?>')">Modificar torneig</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section id="eliminar">
            <div style="margin-top: 100px;" class="container">
                <div class="box">
                    <div style="margin: 50px;">
                        <h1 class="nombre">Eliminar torneig</h1>
                        <h1 class="fonts">Selecciona el torneig</h1>
                        <select id="torneos_eliminar">
                            <option value="0" class="">Selecciona:</option>
                        </select>
                    </div>
                    <div class="m-0 row justify-content-center boto">
                        <button class="btn mx-auto btn-warning boton fonts" onclick="eliminarTorneo('<?php echo base_url(); ?>')">Eliminar torneig</button>
                    </div>
                </div>
            </div>
        </section>
        <section id="usuario">
            <div style="margin-top: 100px;" class="container">
                <div class="box">
                    <h1 class="nombre">Afegir usuari administrador</h1>
                    <form>
                        <div class="row">
                            <span class="icon col-md-12 col-sm-12 text-center lock">
                                <i class="fas fa-lock fa-9x fa-align-center"></i>
                            </span>
                            
                            <div class="col-md-12 col-sm-12 ">
                                <span class="icon text-center lock">
                                    <i class="fas fa-user-shield fa-2x fa-align-center"></i>
                                </span>
                                <input class="in" type="text" name="" id="user" placeholder="Nom d'usuari" style="color: white;">
                            </div>
                            <div class="col-md-6 col-sm-12 ">
                                <span class="icon text-center lock">
                                    <i class="fas fa-key fa-2x fa-align-center"></i>
                                </span>
                                <input class="in" type="password" id="passw" placeholder="Contrasenya" style="color: white;">
                            </div>
                            <div class="col-md-6 col-sm-12 ">
                                <span class="icon text-center lock">
                                    <i class="fas fa-key fa-2x fa-align-center"></i>
                                </span>
                                <input class="in" type="password" id="passw2" placeholder="Comprovar contrasenya" style="color: white;">
                            </div>
                        </div>
                        <div class="m-0 row justify-content-center boto">
                            <button class="btn mx-auto btn-warning boton fonts" onclick="crearAdmin('<?php echo base_url(); ?>')">Crear usuari</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section id="eliminarusu">
            <div style="margin-top: 100px;" class="container">
                <div class="box" style="margin-bottom: 100px;">
                    <div style="margin: 50px;">
                        <h1 class="nombre">Eliminar admin</h1>
                    </div>
                    <form method="POST" action="<?php echo site_url('torneig/delete') ?>">
                        <div class="m-0 row justify-content-center boto">
                            <button class="btn mx-auto btn-warning boton fonts"  >Eliminar-me</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section id="validar">
            <div class="container">
                <div class="box">
                    <h1 class="nombre">Validar partida</h1>
                    
                    <form>
                        <h1 class="fonts">Selecciona el torneig a modificar</h1>
                        <select  id="torneos_v">
                            <option value="" class="">Selecciona:</option>
                        </select>
                        <br><br><br>    
                        <select id="tipo_partida" onchange="datos_partidas('<?php echo base_url(); ?>')">
                            <option value="0" class="">Selecciona partit</option>
                            <option value="C1" class="">Quarts de final 1</option>
                            <option value="C2" class="">Quarts de final 2</option>
                            <option value="C3" class="">Quarts de final 3</option>
                            <option value="C4" class="">Quarts de final 4</option>
                            <option value="S1" class="">Semifinal 1</option>
                            <option value="S2" class="">Semifinal 2</option>
                            <option value="F" class="">Final</option>
                        </select>

                        <div class="row">
                            <div class="col-md-12 col-sm-12" id="foto">
                                
                            </div>
                            <br>
                            <div class="col-12">
                                <select id="users_partida">
                                    <option value="0" class="">Selecciona guanyador</option>
                                </select>
                            </div>
                        </div>
                        
                        <div style="margin-top:20px" class="row justify-content-center boto">
                            <button class="btn mx-auto btn-warning boton fonts" onclick="validado('<?php echo base_url(); ?>')">Validar Guanyador</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </main>
    <script>
        cargar_update('<?php echo base_url(); ?>');
        cargar_eliminar('<?php echo base_url(); ?>');
        cargar_torneos_validar('<?php echo base_url(); ?>');
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js " integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns " crossorigin="anonymous "></script>
    <meta name="viewport " content="width=device-width, initial-scale=1.0 ">
</body>

</html>