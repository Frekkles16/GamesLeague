<!DOCTYPE html>
<html lang="ca">

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
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
    <footer class="bg-footer">
        <div class="bg-footer">
            <hr color="#FF5E00 " style="margin-top: 300px; " size="0.5px ">
            <div class="col-md-3 col-sm-12 ">
                <p class="pfoot ">LA MEJOR WEB DE TORNEOS PARA COMPETIR</p>
            </div>
            <div class="col-md-3 col-sm-12 ">
                <p class="fontf "><a data-toggle="modal" data-target="#exampleModalLong">Privacidad</a></p>
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Privacidad</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Política de privacitat
                            Darrera actualització: 3 de juny de 2021

                            Aquesta Política de privadesa descriu les nostres polítiques i procediments sobre la recopilació, ús i divulgació de la vostra informació quan utilitzeu el Servei i us informa dels vostres drets de privadesa i de com la llei us protegeix.

                            Utilitzem les vostres dades personals per proporcionar i millorar el Servei. En utilitzar el Servei, accepteu la recopilació i l’ús de la informació d’acord amb aquesta Política de privadesa. Aquesta política de privadesa s’ha creat amb l’ajut del generador de polítiques de privadesa .

                            Interpretació i definicions
                            Interpretació
                            Les paraules amb majúscula de la lletra inicial tenen un significat definit en les condicions següents. Les definicions següents tindran el mateix significat independentment de si apareixen en singular o en plural.

                            Definicions
                            Als efectes d’aquesta política de privadesa:

                            Compte significa un compte únic creat perquè pugueu accedir al nostre servei o a parts del nostre servei.

                            Afiliat : una entitat que controla, està controlada per o està sota control comú amb una part, on "control" significa la propietat del 50% o més de les accions, participacions o altres títols amb dret a vot per l'elecció de consellers o altra autoritat de gestió. .

                            Aplicació significa el programa de programari que l’empresa ha descarregat en qualsevol dispositiu electrònic, anomenat GamesLeague

                            L'empresa (en aquest Acord, denominada "l'empresa", "nosaltres", "nosaltres" o "nostre") fa referència a GamesLeague, GamesLeague.

                            El país es refereix a: Espanya

                            Dispositiu significa qualsevol dispositiu que pot accedir al servei, com ara un ordinador, un telèfon mòbil o una tauleta digital.

                            Les dades personals són qualsevol informació relacionada amb una persona identificada o identificable.

                            El servei fa referència a l’aplicació.

                            Proveïdor de serveis significa qualsevol persona física o jurídica que processa les dades en nom de l’empresa. Es refereix a empreses de tercers o persones contractades per la Companyia per facilitar el Servei, proporcionar el Servei en nom de la Companyia, realitzar serveis relacionats amb el Servei o ajudar a la Companyia a analitzar com s’utilitza el Servei.

                            El servei de xarxes socials de tercers fa referència a qualsevol lloc web o qualsevol lloc web de la xarxa social a través del qual un usuari pot iniciar sessió o crear un compte per utilitzar el servei.

                            Les dades d’ús es refereixen a les dades recopilades automàticament, generades per l’ús del servei o des de la pròpia infraestructura del servei (per exemple, la durada d’una visita a la pàgina).

                            Es refereix a la persona que accedeix o utilitza el Servei, o l'empresa o qualsevol altra entitat jurídica en nom de la qual aquest individu accedeixi o utilitzi el Servei, segons correspongui.

                            Recopilació i ús de les vostres dades personals
                            Tipus de dades recollides
                            Dades personals
                            Mentre utilitzeu el nostre servei, és possible que us demanem que ens proporcioneu certa informació d’identificació personal que es pot utilitzar per posar-vos en contacte o identificar-vos. La informació d'identificació personal pot incloure, entre d'altres:

                            Correu electrònic

                            Nom i cognoms

                            Dades d’ús

                            Dades d’ús
                            Les dades d’ús es recopilen automàticament quan s’utilitza el Servei.

                            Les dades d’ús poden incloure informació com ara l’adreça de protocol d’Internet del vostre dispositiu (per exemple, adreça IP), el tipus de navegador, la versió del navegador, les pàgines del nostre servei que visiteu, l’hora i la data de la vostra visita, el temps dedicat a aquestes pàgines, el dispositiu únic identificadors i altres dades de diagnòstic.

                            Quan accediu al servei mitjançant un dispositiu mòbil o mitjançant un dispositiu mòbil, és possible que recopilem certa informació de manera automàtica, incloent, entre d’altres, el tipus de dispositiu mòbil que utilitzeu, l’identificador únic del vostre dispositiu mòbil, l’adreça IP del vostre dispositiu mòbil i el vostre mòbil. sistema operatiu, el tipus de navegador d'Internet mòbil que utilitzeu, identificadors de dispositiu únics i altres dades de diagnòstic.

                            També podem recopilar informació que el vostre navegador envia cada vegada que visiteu el nostre servei o quan accediu al servei mitjançant o mitjançant un dispositiu mòbil.

                            Informació de serveis de xarxes socials de tercers
                            L’empresa us permet crear un compte i iniciar la sessió per utilitzar el servei a través dels següents serveis de xarxes socials de tercers:

                            Google
                            Facebook
                            Twitter
                            Si decidiu registrar-vos o concedir-nos accés a un servei de xarxes socials de tercers, podem recopilar dades personals que ja estiguin associades al compte del vostre servei de xarxes socials de tercers, com ara el vostre nom, la vostra adreça de correu electrònic, les vostres activitats o La vostra llista de contactes associada amb aquest compte.

                            També podeu tenir l'opció de compartir informació addicional amb l'empresa a través del compte del vostre servei de xarxes socials de tercers. Si opteu per proporcionar aquesta informació i dades personals, durant el registre o d’una altra manera, doneu permís a l’empresa per utilitzar-la, compartir-la i emmagatzemar-la de manera compatible amb aquesta política de privadesa.

                            Ús de les vostres dades personals
                            La companyia pot utilitzar dades personals per a les finalitats següents:

                            Per proporcionar i mantenir el nostre Servei , inclòs per supervisar l’ús del nostre Servei.

                            Per gestionar el vostre compte: per gestionar el vostre registre com a usuari del Servei. Les dades personals que proporcioneu us poden donar accés a diferents funcions del servei que teniu a la vostra disposició com a usuari registrat.

                            Per a l'execució d'un contracte: desenvolupament, compliment i compromís del contracte de compra dels productes, articles o serveis que heu comprat o de qualsevol altre contracte amb nosaltres a través del Servei.

                            Per contactar-vos: per contactar-vos per correu electrònic, trucades telefòniques, SMS o altres formes equivalents de comunicació electrònica, com ara les notificacions push d’una aplicació mòbil sobre actualitzacions o comunicacions informatives relacionades amb les funcionalitats, productes o serveis contractats, incloses les actualitzacions de seguretat, quan sigui necessari o raonable per a la seva implementació.

                            Per proporcionar-vos notícies, ofertes especials i informació general sobre altres béns, serveis i esdeveniments que oferim, que són similars als que ja heu comprat o que heu consultat, tret que hagueu optat per no rebre aquesta informació.

                            Per gestionar les vostres sol·licituds: per atendre i gestionar les vostres sol·licituds.

                            Per a transferències empresarials: podem utilitzar la vostra informació per avaluar o dur a terme una fusió, desinversió, reestructuració, reorganització, dissolució o altra venda o transferència d'alguns o de tots els nostres actius, ja sigui com a empresa en curs o com a part de fallida, liquidació, o un procediment similar, en el qual les dades personals que mantenim sobre els usuaris del nostre servei es troben entre els actius transferits.

                            Per a altres propòsits : podem utilitzar la vostra informació per a altres fins, com ara l’anàlisi de dades, la identificació de tendències d’ús, la determinació de l’eficàcia de les nostres campanyes promocionals i per avaluar i millorar el nostre servei, productes, serveis, màrqueting i la vostra experiència.

                            Podem compartir la vostra informació personal en les situacions següents:

                            Amb proveïdors de serveis: podem compartir la vostra informació personal amb proveïdors de serveis per supervisar i analitzar l’ús del nostre servei, per contactar-vos.
                            Per a transferències empresarials: podem compartir o transferir la vostra informació personal en relació amb, o durant les negociacions, de qualsevol fusió, venda d’actius de l’empresa, finançament o adquisició de tot o una part del nostre negoci a una altra empresa.
                            Amb afiliats: podem compartir la vostra informació amb els nostres afiliats, en aquest cas els requerirem que respectin aquesta política de privadesa. Les empreses afiliades inclouen la nostra empresa matriu i qualsevol altra filial, socis d’empresa conjunta o altres empreses que controlem o que estiguin sota control comú amb nosaltres.
                            Amb socis comercials: podem compartir la vostra informació amb els nostres socis comercials per oferir-vos determinats productes, serveis o promocions.
                            Amb altres usuaris: quan compartiu informació personal o interactueu d'una altra manera a les zones públiques amb altres usuaris, la informació pot ser vista per tots els usuaris i es pot distribuir públicament fora. Si interactueu amb altres usuaris o us registreu a través d’un servei de xarxes socials de tercers, és possible que els vostres contactes del servei de xarxes socials de tercers vegin el vostre nom, perfil, imatges i descripció de la vostra activitat. De la mateixa manera, altres usuaris podran veure les descripcions de la vostra activitat, comunicar-vos amb vosaltres i veure el vostre perfil.
                            Amb el vostre consentiment : podem revelar la vostra informació personal amb qualsevol altre propòsit amb el vostre consentiment.
                            Conservació de les vostres dades personals
                            L’empresa conservarà les vostres dades personals només el temps que sigui necessari per a les finalitats establertes en aquesta política de privadesa. Conservarem i utilitzarem les vostres dades personals en la mesura necessària per complir amb les nostres obligacions legals (per exemple, si se’ns exigeix ​​conservar les vostres dades per complir amb les lleis aplicables), resoldre conflictes i aplicar els nostres acords i polítiques legals.

                            L’empresa també conservarà les dades d’ús a efectes d’anàlisi interna. Les dades d’ús es conserven generalment durant un període de temps més curt, excepte quan aquestes dades s’utilitzen per reforçar la seguretat o per millorar la funcionalitat del nostre servei, o estem obligats legalment a conservar aquestes dades durant períodes de temps més llargs.

                            Transferència de les vostres dades personals
                            La vostra informació, incloses les dades personals, es processa a les oficines operatives de la companyia i en qualsevol altre lloc on es trobin les parts implicades en el tractament. Vol dir que aquesta informació es pot transferir a ordinadors ubicats fora del vostre estat, província, país o qualsevol altra jurisdicció governamental on es mantinguin les vostres lleis de protecció de dades que les de la vostra jurisdicció.

                            El vostre consentiment a aquesta política de privadesa seguit de l’enviament d’aquesta informació representa el vostre acord amb aquesta transferència.

                            L’empresa prendrà totes les mesures raonablement necessàries per garantir que les vostres dades siguin tractades de forma segura i d’acord amb aquesta política de privadesa i que no es realitzi cap transferència de les vostres dades personals a una organització o a un país tret que hi hagi controls adequats, inclosa la seguretat de Les vostres dades i altra informació personal.

                            Divulgació de les vostres dades personals
                            Transaccions comercials
                            Si la companyia participa en una fusió, adquisició o venda d’actius, es poden transferir les vostres dades personals. Us avisarem abans que les vostres dades personals siguin transferides i quedin subjectes a una política de privadesa diferent.

                            Aplicació de la llei
                            En determinades circumstàncies, es pot requerir a la Companyia que reveli les vostres dades personals si la llei ho requereix o en resposta a sol·licituds vàlides de les autoritats públiques (per exemple, un tribunal o una agència governamental).

                            Altres requisits legals
                            L’empresa pot revelar les vostres dades personals amb la bona fe creient que aquesta acció és necessària per:

                            Complir una obligació legal
                            Protegir i defensar els drets o la propietat de la Companyia
                            Prevenir o investigar possibles faltes relacionades amb el Servei
                            Protegiu la seguretat personal dels usuaris del Servei o del públic
                            Protegiu-vos de la responsabilitat legal
                            Seguretat de les vostres dades personals
                            La seguretat de les vostres dades personals és important per a nosaltres, però recordeu que cap mètode de transmissió per Internet ni cap mètode d’emmagatzematge electrònic és 100% segur. Tot i que ens esforcem per utilitzar mitjans comercialment acceptables per protegir les vostres dades personals, no podem garantir-ne la seguretat absoluta.

                            Privadesa dels nens
                            El nostre servei no s’adreça a ningú menor de 13 anys. No recopilem conscientment informació d’identificació personal de ningú menor de 13 anys. Si sou pare o tutor i sou conscient que el vostre fill ens ha proporcionat dades personals, si us plau poseu-vos en contacte amb nosaltres. Si ens adonem que hem recopilat dades personals de menors de 13 anys sense verificar el consentiment dels pares, prenem mesures per eliminar aquesta informació dels nostres servidors.

                            Si necessitem confiar en el consentiment com a base legal per processar la vostra informació i el vostre país requereix el consentiment dels pares, és possible que necessitem el consentiment dels vostres pares abans de recopilar i utilitzar aquesta informació.

                            Enllaços a altres llocs web
                            El nostre Servei pot contenir enllaços a altres llocs web que no operem per nosaltres. Si feu clic a un enllaç de tercers, se us dirigirà al lloc d'aquest tercer. Us aconsellem que reviseu la política de privadesa de tots els llocs que visiteu.

                            No tenim control ni assumim cap responsabilitat pel contingut, les polítiques de privadesa o les pràctiques de llocs o serveis de tercers.

                            Canvis en aquesta política de privadesa
                            Podem actualitzar la nostra política de privadesa de tant en tant. Us notificarem qualsevol canvi publicant la nova Política de privadesa en aquesta pàgina.

                            Us ho farem saber per correu electrònic i / o un avís destacat sobre el nostre servei, abans que el canvi entri en vigor i actualitzarem la data "Última actualització" a la part superior d'aquesta Política de privadesa.

                            Us recomanem que reviseu aquesta Política de privadesa periòdicament si hi ha canvis. Els canvis en aquesta política de privadesa són efectius quan es publiquen en aquesta pàgina.

                            Poseu-vos en contacte amb nosaltres
                            Si teniu cap pregunta sobre aquesta política de privadesa, podeu contactar amb nosaltres:

                            Per correu electrònic: gamesleague@gmail.com
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                        </div>
                    </div>
                    </div>
            </div>
            <div class="col-md-3 col-sm-12 ">
                <p class="fontf "><a data-toggle="modal" data-target="#exampleModalLong">Condicions</a></p>
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Condicions</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Política de privacitat
                            Darrera actualització: 3 de juny de 2021

                            Aquesta Política de privadesa descriu les nostres polítiques i procediments sobre la recopilació, ús i divulgació de la vostra informació quan utilitzeu el Servei i us informa dels vostres drets de privadesa i de com la llei us protegeix.

                            Utilitzem les vostres dades personals per proporcionar i millorar el Servei. En utilitzar el Servei, accepteu la recopilació i l’ús de la informació d’acord amb aquesta Política de privadesa. Aquesta política de privadesa s’ha creat amb l’ajut del generador de polítiques de privadesa .

                            Interpretació i definicions
                            Interpretació
                            Les paraules amb majúscula de la lletra inicial tenen un significat definit en les condicions següents. Les definicions següents tindran el mateix significat independentment de si apareixen en singular o en plural.

                            Definicions
                            Als efectes d’aquesta política de privadesa:

                            Compte significa un compte únic creat perquè pugueu accedir al nostre servei o a parts del nostre servei.

                            Afiliat : una entitat que controla, està controlada per o està sota control comú amb una part, on "control" significa la propietat del 50% o més de les accions, participacions o altres títols amb dret a vot per l'elecció de consellers o altra autoritat de gestió. .

                            Aplicació significa el programa de programari que l’empresa ha descarregat en qualsevol dispositiu electrònic, anomenat GamesLeague

                            L'empresa (en aquest Acord, denominada "l'empresa", "nosaltres", "nosaltres" o "nostre") fa referència a GamesLeague, GamesLeague.

                            El país es refereix a: Espanya

                            Dispositiu significa qualsevol dispositiu que pot accedir al servei, com ara un ordinador, un telèfon mòbil o una tauleta digital.

                            Les dades personals són qualsevol informació relacionada amb una persona identificada o identificable.

                            El servei fa referència a l’aplicació.

                            Proveïdor de serveis significa qualsevol persona física o jurídica que processa les dades en nom de l’empresa. Es refereix a empreses de tercers o persones contractades per la Companyia per facilitar el Servei, proporcionar el Servei en nom de la Companyia, realitzar serveis relacionats amb el Servei o ajudar a la Companyia a analitzar com s’utilitza el Servei.

                            El servei de xarxes socials de tercers fa referència a qualsevol lloc web o qualsevol lloc web de la xarxa social a través del qual un usuari pot iniciar sessió o crear un compte per utilitzar el servei.

                            Les dades d’ús es refereixen a les dades recopilades automàticament, generades per l’ús del servei o des de la pròpia infraestructura del servei (per exemple, la durada d’una visita a la pàgina).

                            Es refereix a la persona que accedeix o utilitza el Servei, o l'empresa o qualsevol altra entitat jurídica en nom de la qual aquest individu accedeixi o utilitzi el Servei, segons correspongui.

                            Recopilació i ús de les vostres dades personals
                            Tipus de dades recollides
                            Dades personals
                            Mentre utilitzeu el nostre servei, és possible que us demanem que ens proporcioneu certa informació d’identificació personal que es pot utilitzar per posar-vos en contacte o identificar-vos. La informació d'identificació personal pot incloure, entre d'altres:

                            Correu electrònic

                            Nom i cognoms

                            Dades d’ús

                            Dades d’ús
                            Les dades d’ús es recopilen automàticament quan s’utilitza el Servei.

                            Les dades d’ús poden incloure informació com ara l’adreça de protocol d’Internet del vostre dispositiu (per exemple, adreça IP), el tipus de navegador, la versió del navegador, les pàgines del nostre servei que visiteu, l’hora i la data de la vostra visita, el temps dedicat a aquestes pàgines, el dispositiu únic identificadors i altres dades de diagnòstic.

                            Quan accediu al servei mitjançant un dispositiu mòbil o mitjançant un dispositiu mòbil, és possible que recopilem certa informació de manera automàtica, incloent, entre d’altres, el tipus de dispositiu mòbil que utilitzeu, l’identificador únic del vostre dispositiu mòbil, l’adreça IP del vostre dispositiu mòbil i el vostre mòbil. sistema operatiu, el tipus de navegador d'Internet mòbil que utilitzeu, identificadors de dispositiu únics i altres dades de diagnòstic.

                            També podem recopilar informació que el vostre navegador envia cada vegada que visiteu el nostre servei o quan accediu al servei mitjançant o mitjançant un dispositiu mòbil.

                            Informació de serveis de xarxes socials de tercers
                            L’empresa us permet crear un compte i iniciar la sessió per utilitzar el servei a través dels següents serveis de xarxes socials de tercers:

                            Google
                            Facebook
                            Twitter
                            Si decidiu registrar-vos o concedir-nos accés a un servei de xarxes socials de tercers, podem recopilar dades personals que ja estiguin associades al compte del vostre servei de xarxes socials de tercers, com ara el vostre nom, la vostra adreça de correu electrònic, les vostres activitats o La vostra llista de contactes associada amb aquest compte.

                            També podeu tenir l'opció de compartir informació addicional amb l'empresa a través del compte del vostre servei de xarxes socials de tercers. Si opteu per proporcionar aquesta informació i dades personals, durant el registre o d’una altra manera, doneu permís a l’empresa per utilitzar-la, compartir-la i emmagatzemar-la de manera compatible amb aquesta política de privadesa.

                            Ús de les vostres dades personals
                            La companyia pot utilitzar dades personals per a les finalitats següents:

                            Per proporcionar i mantenir el nostre Servei , inclòs per supervisar l’ús del nostre Servei.

                            Per gestionar el vostre compte: per gestionar el vostre registre com a usuari del Servei. Les dades personals que proporcioneu us poden donar accés a diferents funcions del servei que teniu a la vostra disposició com a usuari registrat.

                            Per a l'execució d'un contracte: desenvolupament, compliment i compromís del contracte de compra dels productes, articles o serveis que heu comprat o de qualsevol altre contracte amb nosaltres a través del Servei.

                            Per contactar-vos: per contactar-vos per correu electrònic, trucades telefòniques, SMS o altres formes equivalents de comunicació electrònica, com ara les notificacions push d’una aplicació mòbil sobre actualitzacions o comunicacions informatives relacionades amb les funcionalitats, productes o serveis contractats, incloses les actualitzacions de seguretat, quan sigui necessari o raonable per a la seva implementació.

                            Per proporcionar-vos notícies, ofertes especials i informació general sobre altres béns, serveis i esdeveniments que oferim, que són similars als que ja heu comprat o que heu consultat, tret que hagueu optat per no rebre aquesta informació.

                            Per gestionar les vostres sol·licituds: per atendre i gestionar les vostres sol·licituds.

                            Per a transferències empresarials: podem utilitzar la vostra informació per avaluar o dur a terme una fusió, desinversió, reestructuració, reorganització, dissolució o altra venda o transferència d'alguns o de tots els nostres actius, ja sigui com a empresa en curs o com a part de fallida, liquidació, o un procediment similar, en el qual les dades personals que mantenim sobre els usuaris del nostre servei es troben entre els actius transferits.

                            Per a altres propòsits : podem utilitzar la vostra informació per a altres fins, com ara l’anàlisi de dades, la identificació de tendències d’ús, la determinació de l’eficàcia de les nostres campanyes promocionals i per avaluar i millorar el nostre servei, productes, serveis, màrqueting i la vostra experiència.

                            Podem compartir la vostra informació personal en les situacions següents:

                            Amb proveïdors de serveis: podem compartir la vostra informació personal amb proveïdors de serveis per supervisar i analitzar l’ús del nostre servei, per contactar-vos.
                            Per a transferències empresarials: podem compartir o transferir la vostra informació personal en relació amb, o durant les negociacions, de qualsevol fusió, venda d’actius de l’empresa, finançament o adquisició de tot o una part del nostre negoci a una altra empresa.
                            Amb afiliats: podem compartir la vostra informació amb els nostres afiliats, en aquest cas els requerirem que respectin aquesta política de privadesa. Les empreses afiliades inclouen la nostra empresa matriu i qualsevol altra filial, socis d’empresa conjunta o altres empreses que controlem o que estiguin sota control comú amb nosaltres.
                            Amb socis comercials: podem compartir la vostra informació amb els nostres socis comercials per oferir-vos determinats productes, serveis o promocions.
                            Amb altres usuaris: quan compartiu informació personal o interactueu d'una altra manera a les zones públiques amb altres usuaris, la informació pot ser vista per tots els usuaris i es pot distribuir públicament fora. Si interactueu amb altres usuaris o us registreu a través d’un servei de xarxes socials de tercers, és possible que els vostres contactes del servei de xarxes socials de tercers vegin el vostre nom, perfil, imatges i descripció de la vostra activitat. De la mateixa manera, altres usuaris podran veure les descripcions de la vostra activitat, comunicar-vos amb vosaltres i veure el vostre perfil.
                            Amb el vostre consentiment : podem revelar la vostra informació personal amb qualsevol altre propòsit amb el vostre consentiment.
                            Conservació de les vostres dades personals
                            L’empresa conservarà les vostres dades personals només el temps que sigui necessari per a les finalitats establertes en aquesta política de privadesa. Conservarem i utilitzarem les vostres dades personals en la mesura necessària per complir amb les nostres obligacions legals (per exemple, si se’ns exigeix ​​conservar les vostres dades per complir amb les lleis aplicables), resoldre conflictes i aplicar els nostres acords i polítiques legals.

                            L’empresa també conservarà les dades d’ús a efectes d’anàlisi interna. Les dades d’ús es conserven generalment durant un període de temps més curt, excepte quan aquestes dades s’utilitzen per reforçar la seguretat o per millorar la funcionalitat del nostre servei, o estem obligats legalment a conservar aquestes dades durant períodes de temps més llargs.

                            Transferència de les vostres dades personals
                            La vostra informació, incloses les dades personals, es processa a les oficines operatives de la companyia i en qualsevol altre lloc on es trobin les parts implicades en el tractament. Vol dir que aquesta informació es pot transferir a ordinadors ubicats fora del vostre estat, província, país o qualsevol altra jurisdicció governamental on es mantinguin les vostres lleis de protecció de dades que les de la vostra jurisdicció.

                            El vostre consentiment a aquesta política de privadesa seguit de l’enviament d’aquesta informació representa el vostre acord amb aquesta transferència.

                            L’empresa prendrà totes les mesures raonablement necessàries per garantir que les vostres dades siguin tractades de forma segura i d’acord amb aquesta política de privadesa i que no es realitzi cap transferència de les vostres dades personals a una organització o a un país tret que hi hagi controls adequats, inclosa la seguretat de Les vostres dades i altra informació personal.

                            Divulgació de les vostres dades personals
                            Transaccions comercials
                            Si la companyia participa en una fusió, adquisició o venda d’actius, es poden transferir les vostres dades personals. Us avisarem abans que les vostres dades personals siguin transferides i quedin subjectes a una política de privadesa diferent.

                            Aplicació de la llei
                            En determinades circumstàncies, es pot requerir a la Companyia que reveli les vostres dades personals si la llei ho requereix o en resposta a sol·licituds vàlides de les autoritats públiques (per exemple, un tribunal o una agència governamental).

                            Altres requisits legals
                            L’empresa pot revelar les vostres dades personals amb la bona fe creient que aquesta acció és necessària per:

                            Complir una obligació legal
                            Protegir i defensar els drets o la propietat de la Companyia
                            Prevenir o investigar possibles faltes relacionades amb el Servei
                            Protegiu la seguretat personal dels usuaris del Servei o del públic
                            Protegiu-vos de la responsabilitat legal
                            Seguretat de les vostres dades personals
                            La seguretat de les vostres dades personals és important per a nosaltres, però recordeu que cap mètode de transmissió per Internet ni cap mètode d’emmagatzematge electrònic és 100% segur. Tot i que ens esforcem per utilitzar mitjans comercialment acceptables per protegir les vostres dades personals, no podem garantir-ne la seguretat absoluta.

                            Privadesa dels nens
                            El nostre servei no s’adreça a ningú menor de 13 anys. No recopilem conscientment informació d’identificació personal de ningú menor de 13 anys. Si sou pare o tutor i sou conscient que el vostre fill ens ha proporcionat dades personals, si us plau poseu-vos en contacte amb nosaltres. Si ens adonem que hem recopilat dades personals de menors de 13 anys sense verificar el consentiment dels pares, prenem mesures per eliminar aquesta informació dels nostres servidors.

                            Si necessitem confiar en el consentiment com a base legal per processar la vostra informació i el vostre país requereix el consentiment dels pares, és possible que necessitem el consentiment dels vostres pares abans de recopilar i utilitzar aquesta informació.

                            Enllaços a altres llocs web
                            El nostre Servei pot contenir enllaços a altres llocs web que no operem per nosaltres. Si feu clic a un enllaç de tercers, se us dirigirà al lloc d'aquest tercer. Us aconsellem que reviseu la política de privadesa de tots els llocs que visiteu.

                            No tenim control ni assumim cap responsabilitat pel contingut, les polítiques de privadesa o les pràctiques de llocs o serveis de tercers.

                            Canvis en aquesta política de privadesa
                            Podem actualitzar la nostra política de privadesa de tant en tant. Us notificarem qualsevol canvi publicant la nova Política de privadesa en aquesta pàgina.

                            Us ho farem saber per correu electrònic i / o un avís destacat sobre el nostre servei, abans que el canvi entri en vigor i actualitzarem la data "Última actualització" a la part superior d'aquesta Política de privadesa.

                            Us recomanem que reviseu aquesta Política de privadesa periòdicament si hi ha canvis. Els canvis en aquesta política de privadesa són efectius quan es publiquen en aquesta pàgina.

                            Poseu-vos en contacte amb nosaltres
                            Si teniu cap pregunta sobre aquesta política de privadesa, podeu contactar amb nosaltres:

                            Per correu electrònic: gamesleague@gmail.com
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                        </div>
                    </div>
                    </div>
            </div>
            <div class="col-md-3 col-sm-12 ">
                <p class="copy">Copyright 2021 GAMESLEAGUE</p>
            </div>
        </div>
    </footer>
    <script>
        load_ranking('<?php echo base_url(); ?>');
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js " integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns " crossorigin="anonymous "></script>
    <meta name="viewport " content="width=device-width, initial-scale=1.0 ">
</body>
</html>