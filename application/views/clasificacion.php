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
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
    <h1 class="mx-auto" style="text-align: center; color: white;">Cuartos de final</h1>
    <div class="cuadro r">

        <?php 

        $cont = 0;
        for ($i = 0; $i < 4; $i++){ ?>
            <div class="col-md-6 col-sm-6 col-6 m mx-auto md" style="padding: 40px; display: inline-flex; margin-right: 30px;">
            <?php for ($j = 0; $j < 2; $j++){ ?>
                <?php $a =  $jugadors->result_array() ?>
                <div class="col-6 text-center">
                    <p style="color: white;"> <?php 
                    if ($a[$cont]['Nom_Usuari'] == '') {
                        echo "<form method='POST' action='" . site_url('torneig/inscribir') ."'>
                            <input type='hidden' name='idPa' value='" . $a[$cont]['Id_Pa_To_Us'] . "' >
                            <button>Inscribirme</button>
                        </form>";
                    }else
                    {
                        echo $a[$cont]['Nom_Usuari'];
                    }
        ?>
                        
                    </p>
                       
                </div>
                    
            <?php $cont++; } ?>
            </div>
        <?php } ?>

    </div>

    <h1 class="mx-auto" style="text-align: center; color: white; margin-left: 50px;">Semifinal</h1>
    <div class="row cuadro mx-auto ">
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
    <div class="row cuadro mx-auto">
        <div class="col-md-6 col-sm-6 col-6 cuadro mx-auto" style="display: inline-flex;margin: auto;">
            <div class="col-md-6 col-sm-6 m mx-auto" style="padding: 40px; display: inline-flex; margin-right: 30px;">
                <p style="color: white;"></p>
                <hr color="white" style="margin-right: 20px;" width="100px">
                <hr color="white" width="100px">
            </div>
        </div>
    </div>
    <h1 class="mx-auto" style="text-align: center; color: white;">Ganador</h1>
    <div class="row mx-auto">
        <div class="col-md-6 col-sm-6 col-6 mx-auto" style="display: inline-flex;margin: auto;">
            <div class="col-md-6 col-sm-6 m mx-auto" style="padding: 40px; display: inline-flex; margin-right: 30px;">
                <p style="color: white;"></p>
                <hr color="white" style="margin-right: 20px;" width="100px">
                <hr color="white" width="100px">
            </div>
        </div>
    </div>
    <section class="col-md-12 col-sm-12 bg-reglas">
        <h1 class="fonts fonts1">
            Reglas de torneig
        </h1>
        <h2 class="fonts fonts2">
            Format de torneig
        </h2>
        <p class="fonts fonts3">
            Eliminat??ria de 16 equips que es s'aniran enfrontant entre ells
        </p>
        <h2 class="fonts fonts2">
            Plantilles
        </h2>
        <p class="fonts fonts3">
            Las plantillas deben ser las plantillas actualizadas, de no ser as?? habr??a penalizaci??n
        </p>
        <h2 class="fonts fonts2">
            PARTIT FINALITZAT AMB EMPAT
        </h2>
        <p class="fonts fonts3">
            Si el partit finalitza amb empat, s'hauria de jugar la prorroga, si despr??s els 30 minuts extres segueix l'empat arribar??em a penals
        </p>
    </section>
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
                            Pol??tica de privacitat
                            Darrera actualitzaci??: 3 de juny de 2021

                            Aquesta Pol??tica de privadesa descriu les nostres pol??tiques i procediments sobre la recopilaci??, ??s i divulgaci?? de la vostra informaci?? quan utilitzeu el Servei i us informa dels vostres drets de privadesa i de com la llei us protegeix.

                            Utilitzem les vostres dades personals per proporcionar i millorar el Servei. En utilitzar el Servei, accepteu la recopilaci?? i l?????s de la informaci?? d???acord amb aquesta Pol??tica de privadesa. Aquesta pol??tica de privadesa s???ha creat amb l???ajut del generador de pol??tiques de privadesa .

                            Interpretaci?? i definicions
                            Interpretaci??
                            Les paraules amb maj??scula de la lletra inicial tenen un significat definit en les condicions seg??ents. Les definicions seg??ents tindran el mateix significat independentment de si apareixen en singular o en plural.

                            Definicions
                            Als efectes d???aquesta pol??tica de privadesa:

                            Compte significa un compte ??nic creat perqu?? pugueu accedir al nostre servei o a parts del nostre servei.

                            Afiliat : una entitat que controla, est?? controlada per o est?? sota control com?? amb una part, on "control" significa la propietat del 50% o m??s de les accions, participacions o altres t??tols amb dret a vot per l'elecci?? de consellers o altra autoritat de gesti??. .

                            Aplicaci?? significa el programa de programari que l???empresa ha descarregat en qualsevol dispositiu electr??nic, anomenat GamesLeague

                            L'empresa (en aquest Acord, denominada "l'empresa", "nosaltres", "nosaltres" o "nostre") fa refer??ncia a GamesLeague, GamesLeague.

                            El pa??s es refereix a: Espanya

                            Dispositiu significa qualsevol dispositiu que pot accedir al servei, com ara un ordinador, un tel??fon m??bil o una tauleta digital.

                            Les dades personals s??n qualsevol informaci?? relacionada amb una persona identificada o identificable.

                            El servei fa refer??ncia a l???aplicaci??.

                            Prove??dor de serveis significa qualsevol persona f??sica o jur??dica que processa les dades en nom de l???empresa. Es refereix a empreses de tercers o persones contractades per la Companyia per facilitar el Servei, proporcionar el Servei en nom de la Companyia, realitzar serveis relacionats amb el Servei o ajudar a la Companyia a analitzar com s???utilitza el Servei.

                            El servei de xarxes socials de tercers fa refer??ncia a qualsevol lloc web o qualsevol lloc web de la xarxa social a trav??s del qual un usuari pot iniciar sessi?? o crear un compte per utilitzar el servei.

                            Les dades d?????s es refereixen a les dades recopilades autom??ticament, generades per l?????s del servei o des de la pr??pia infraestructura del servei (per exemple, la durada d???una visita a la p??gina).

                            Es refereix a la persona que accedeix o utilitza el Servei, o l'empresa o qualsevol altra entitat jur??dica en nom de la qual aquest individu accedeixi o utilitzi el Servei, segons correspongui.

                            Recopilaci?? i ??s de les vostres dades personals
                            Tipus de dades recollides
                            Dades personals
                            Mentre utilitzeu el nostre servei, ??s possible que us demanem que ens proporcioneu certa informaci?? d???identificaci?? personal que es pot utilitzar per posar-vos en contacte o identificar-vos. La informaci?? d'identificaci?? personal pot incloure, entre d'altres:

                            Correu electr??nic

                            Nom i cognoms

                            Dades d?????s

                            Dades d?????s
                            Les dades d?????s es recopilen autom??ticament quan s???utilitza el Servei.

                            Les dades d?????s poden incloure informaci?? com ara l???adre??a de protocol d???Internet del vostre dispositiu (per exemple, adre??a IP), el tipus de navegador, la versi?? del navegador, les p??gines del nostre servei que visiteu, l???hora i la data de la vostra visita, el temps dedicat a aquestes p??gines, el dispositiu ??nic identificadors i altres dades de diagn??stic.

                            Quan accediu al servei mitjan??ant un dispositiu m??bil o mitjan??ant un dispositiu m??bil, ??s possible que recopilem certa informaci?? de manera autom??tica, incloent, entre d???altres, el tipus de dispositiu m??bil que utilitzeu, l???identificador ??nic del vostre dispositiu m??bil, l???adre??a IP del vostre dispositiu m??bil i el vostre m??bil. sistema operatiu, el tipus de navegador d'Internet m??bil que utilitzeu, identificadors de dispositiu ??nics i altres dades de diagn??stic.

                            Tamb?? podem recopilar informaci?? que el vostre navegador envia cada vegada que visiteu el nostre servei o quan accediu al servei mitjan??ant o mitjan??ant un dispositiu m??bil.

                            Informaci?? de serveis de xarxes socials de tercers
                            L???empresa us permet crear un compte i iniciar la sessi?? per utilitzar el servei a trav??s dels seg??ents serveis de xarxes socials de tercers:

                            Google
                            Facebook
                            Twitter
                            Si decidiu registrar-vos o concedir-nos acc??s a un servei de xarxes socials de tercers, podem recopilar dades personals que ja estiguin associades al compte del vostre servei de xarxes socials de tercers, com ara el vostre nom, la vostra adre??a de correu electr??nic, les vostres activitats o La vostra llista de contactes associada amb aquest compte.

                            Tamb?? podeu tenir l'opci?? de compartir informaci?? addicional amb l'empresa a trav??s del compte del vostre servei de xarxes socials de tercers. Si opteu per proporcionar aquesta informaci?? i dades personals, durant el registre o d???una altra manera, doneu perm??s a l???empresa per utilitzar-la, compartir-la i emmagatzemar-la de manera compatible amb aquesta pol??tica de privadesa.

                            ??s de les vostres dades personals
                            La companyia pot utilitzar dades personals per a les finalitats seg??ents:

                            Per proporcionar i mantenir el nostre Servei , incl??s per supervisar l?????s del nostre Servei.

                            Per gestionar el vostre compte: per gestionar el vostre registre com a usuari del Servei. Les dades personals que proporcioneu us poden donar acc??s a diferents funcions del servei que teniu a la vostra disposici?? com a usuari registrat.

                            Per a l'execuci?? d'un contracte: desenvolupament, compliment i comprom??s del contracte de compra dels productes, articles o serveis que heu comprat o de qualsevol altre contracte amb nosaltres a trav??s del Servei.

                            Per contactar-vos: per contactar-vos per correu electr??nic, trucades telef??niques, SMS o altres formes equivalents de comunicaci?? electr??nica, com ara les notificacions push d???una aplicaci?? m??bil sobre actualitzacions o comunicacions informatives relacionades amb les funcionalitats, productes o serveis contractats, incloses les actualitzacions de seguretat, quan sigui necessari o raonable per a la seva implementaci??.

                            Per proporcionar-vos not??cies, ofertes especials i informaci?? general sobre altres b??ns, serveis i esdeveniments que oferim, que s??n similars als que ja heu comprat o que heu consultat, tret que hagueu optat per no rebre aquesta informaci??.

                            Per gestionar les vostres sol??licituds: per atendre i gestionar les vostres sol??licituds.

                            Per a transfer??ncies empresarials: podem utilitzar la vostra informaci?? per avaluar o dur a terme una fusi??, desinversi??, reestructuraci??, reorganitzaci??, dissoluci?? o altra venda o transfer??ncia d'alguns o de tots els nostres actius, ja sigui com a empresa en curs o com a part de fallida, liquidaci??, o un procediment similar, en el qual les dades personals que mantenim sobre els usuaris del nostre servei es troben entre els actius transferits.

                            Per a altres prop??sits : podem utilitzar la vostra informaci?? per a altres fins, com ara l???an??lisi de dades, la identificaci?? de tend??ncies d?????s, la determinaci?? de l???efic??cia de les nostres campanyes promocionals i per avaluar i millorar el nostre servei, productes, serveis, m??rqueting i la vostra experi??ncia.

                            Podem compartir la vostra informaci?? personal en les situacions seg??ents:

                            Amb prove??dors de serveis: podem compartir la vostra informaci?? personal amb prove??dors de serveis per supervisar i analitzar l?????s del nostre servei, per contactar-vos.
                            Per a transfer??ncies empresarials: podem compartir o transferir la vostra informaci?? personal en relaci?? amb, o durant les negociacions, de qualsevol fusi??, venda d???actius de l???empresa, finan??ament o adquisici?? de tot o una part del nostre negoci a una altra empresa.
                            Amb afiliats: podem compartir la vostra informaci?? amb els nostres afiliats, en aquest cas els requerirem que respectin aquesta pol??tica de privadesa. Les empreses afiliades inclouen la nostra empresa matriu i qualsevol altra filial, socis d???empresa conjunta o altres empreses que controlem o que estiguin sota control com?? amb nosaltres.
                            Amb socis comercials: podem compartir la vostra informaci?? amb els nostres socis comercials per oferir-vos determinats productes, serveis o promocions.
                            Amb altres usuaris: quan compartiu informaci?? personal o interactueu d'una altra manera a les zones p??bliques amb altres usuaris, la informaci?? pot ser vista per tots els usuaris i es pot distribuir p??blicament fora. Si interactueu amb altres usuaris o us registreu a trav??s d???un servei de xarxes socials de tercers, ??s possible que els vostres contactes del servei de xarxes socials de tercers vegin el vostre nom, perfil, imatges i descripci?? de la vostra activitat. De la mateixa manera, altres usuaris podran veure les descripcions de la vostra activitat, comunicar-vos amb vosaltres i veure el vostre perfil.
                            Amb el vostre consentiment : podem revelar la vostra informaci?? personal amb qualsevol altre prop??sit amb el vostre consentiment.
                            Conservaci?? de les vostres dades personals
                            L???empresa conservar?? les vostres dades personals nom??s el temps que sigui necessari per a les finalitats establertes en aquesta pol??tica de privadesa. Conservarem i utilitzarem les vostres dades personals en la mesura necess??ria per complir amb les nostres obligacions legals (per exemple, si se???ns exigeix ??????conservar les vostres dades per complir amb les lleis aplicables), resoldre conflictes i aplicar els nostres acords i pol??tiques legals.

                            L???empresa tamb?? conservar?? les dades d?????s a efectes d???an??lisi interna. Les dades d?????s es conserven generalment durant un per??ode de temps m??s curt, excepte quan aquestes dades s???utilitzen per refor??ar la seguretat o per millorar la funcionalitat del nostre servei, o estem obligats legalment a conservar aquestes dades durant per??odes de temps m??s llargs.

                            Transfer??ncia de les vostres dades personals
                            La vostra informaci??, incloses les dades personals, es processa a les oficines operatives de la companyia i en qualsevol altre lloc on es trobin les parts implicades en el tractament. Vol dir que aquesta informaci?? es pot transferir a ordinadors ubicats fora del vostre estat, prov??ncia, pa??s o qualsevol altra jurisdicci?? governamental on es mantinguin les vostres lleis de protecci?? de dades que les de la vostra jurisdicci??.

                            El vostre consentiment a aquesta pol??tica de privadesa seguit de l???enviament d???aquesta informaci?? representa el vostre acord amb aquesta transfer??ncia.

                            L???empresa prendr?? totes les mesures raonablement necess??ries per garantir que les vostres dades siguin tractades de forma segura i d???acord amb aquesta pol??tica de privadesa i que no es realitzi cap transfer??ncia de les vostres dades personals a una organitzaci?? o a un pa??s tret que hi hagi controls adequats, inclosa la seguretat de Les vostres dades i altra informaci?? personal.

                            Divulgaci?? de les vostres dades personals
                            Transaccions comercials
                            Si la companyia participa en una fusi??, adquisici?? o venda d???actius, es poden transferir les vostres dades personals. Us avisarem abans que les vostres dades personals siguin transferides i quedin subjectes a una pol??tica de privadesa diferent.

                            Aplicaci?? de la llei
                            En determinades circumst??ncies, es pot requerir a la Companyia que reveli les vostres dades personals si la llei ho requereix o en resposta a sol??licituds v??lides de les autoritats p??bliques (per exemple, un tribunal o una ag??ncia governamental).

                            Altres requisits legals
                            L???empresa pot revelar les vostres dades personals amb la bona fe creient que aquesta acci?? ??s necess??ria per:

                            Complir una obligaci?? legal
                            Protegir i defensar els drets o la propietat de la Companyia
                            Prevenir o investigar possibles faltes relacionades amb el Servei
                            Protegiu la seguretat personal dels usuaris del Servei o del p??blic
                            Protegiu-vos de la responsabilitat legal
                            Seguretat de les vostres dades personals
                            La seguretat de les vostres dades personals ??s important per a nosaltres, per?? recordeu que cap m??tode de transmissi?? per Internet ni cap m??tode d???emmagatzematge electr??nic ??s 100% segur. Tot i que ens esforcem per utilitzar mitjans comercialment acceptables per protegir les vostres dades personals, no podem garantir-ne la seguretat absoluta.

                            Privadesa dels nens
                            El nostre servei no s???adre??a a ning?? menor de 13 anys. No recopilem conscientment informaci?? d???identificaci?? personal de ning?? menor de 13 anys. Si sou pare o tutor i sou conscient que el vostre fill ens ha proporcionat dades personals, si us plau poseu-vos en contacte amb nosaltres. Si ens adonem que hem recopilat dades personals de menors de 13 anys sense verificar el consentiment dels pares, prenem mesures per eliminar aquesta informaci?? dels nostres servidors.

                            Si necessitem confiar en el consentiment com a base legal per processar la vostra informaci?? i el vostre pa??s requereix el consentiment dels pares, ??s possible que necessitem el consentiment dels vostres pares abans de recopilar i utilitzar aquesta informaci??.

                            Enlla??os a altres llocs web
                            El nostre Servei pot contenir enlla??os a altres llocs web que no operem per nosaltres. Si feu clic a un enlla?? de tercers, se us dirigir?? al lloc d'aquest tercer. Us aconsellem que reviseu la pol??tica de privadesa de tots els llocs que visiteu.

                            No tenim control ni assumim cap responsabilitat pel contingut, les pol??tiques de privadesa o les pr??ctiques de llocs o serveis de tercers.

                            Canvis en aquesta pol??tica de privadesa
                            Podem actualitzar la nostra pol??tica de privadesa de tant en tant. Us notificarem qualsevol canvi publicant la nova Pol??tica de privadesa en aquesta p??gina.

                            Us ho farem saber per correu electr??nic i / o un av??s destacat sobre el nostre servei, abans que el canvi entri en vigor i actualitzarem la data "??ltima actualitzaci??" a la part superior d'aquesta Pol??tica de privadesa.

                            Us recomanem que reviseu aquesta Pol??tica de privadesa peri??dicament si hi ha canvis. Els canvis en aquesta pol??tica de privadesa s??n efectius quan es publiquen en aquesta p??gina.

                            Poseu-vos en contacte amb nosaltres
                            Si teniu cap pregunta sobre aquesta pol??tica de privadesa, podeu contactar amb nosaltres:

                            Per correu electr??nic: gamesleague@gmail.com
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
                            Pol??tica de privacitat
                            Darrera actualitzaci??: 3 de juny de 2021

                            Aquesta Pol??tica de privadesa descriu les nostres pol??tiques i procediments sobre la recopilaci??, ??s i divulgaci?? de la vostra informaci?? quan utilitzeu el Servei i us informa dels vostres drets de privadesa i de com la llei us protegeix.

                            Utilitzem les vostres dades personals per proporcionar i millorar el Servei. En utilitzar el Servei, accepteu la recopilaci?? i l?????s de la informaci?? d???acord amb aquesta Pol??tica de privadesa. Aquesta pol??tica de privadesa s???ha creat amb l???ajut del generador de pol??tiques de privadesa .

                            Interpretaci?? i definicions
                            Interpretaci??
                            Les paraules amb maj??scula de la lletra inicial tenen un significat definit en les condicions seg??ents. Les definicions seg??ents tindran el mateix significat independentment de si apareixen en singular o en plural.

                            Definicions
                            Als efectes d???aquesta pol??tica de privadesa:

                            Compte significa un compte ??nic creat perqu?? pugueu accedir al nostre servei o a parts del nostre servei.

                            Afiliat : una entitat que controla, est?? controlada per o est?? sota control com?? amb una part, on "control" significa la propietat del 50% o m??s de les accions, participacions o altres t??tols amb dret a vot per l'elecci?? de consellers o altra autoritat de gesti??. .

                            Aplicaci?? significa el programa de programari que l???empresa ha descarregat en qualsevol dispositiu electr??nic, anomenat GamesLeague

                            L'empresa (en aquest Acord, denominada "l'empresa", "nosaltres", "nosaltres" o "nostre") fa refer??ncia a GamesLeague, GamesLeague.

                            El pa??s es refereix a: Espanya

                            Dispositiu significa qualsevol dispositiu que pot accedir al servei, com ara un ordinador, un tel??fon m??bil o una tauleta digital.

                            Les dades personals s??n qualsevol informaci?? relacionada amb una persona identificada o identificable.

                            El servei fa refer??ncia a l???aplicaci??.

                            Prove??dor de serveis significa qualsevol persona f??sica o jur??dica que processa les dades en nom de l???empresa. Es refereix a empreses de tercers o persones contractades per la Companyia per facilitar el Servei, proporcionar el Servei en nom de la Companyia, realitzar serveis relacionats amb el Servei o ajudar a la Companyia a analitzar com s???utilitza el Servei.

                            El servei de xarxes socials de tercers fa refer??ncia a qualsevol lloc web o qualsevol lloc web de la xarxa social a trav??s del qual un usuari pot iniciar sessi?? o crear un compte per utilitzar el servei.

                            Les dades d?????s es refereixen a les dades recopilades autom??ticament, generades per l?????s del servei o des de la pr??pia infraestructura del servei (per exemple, la durada d???una visita a la p??gina).

                            Es refereix a la persona que accedeix o utilitza el Servei, o l'empresa o qualsevol altra entitat jur??dica en nom de la qual aquest individu accedeixi o utilitzi el Servei, segons correspongui.

                            Recopilaci?? i ??s de les vostres dades personals
                            Tipus de dades recollides
                            Dades personals
                            Mentre utilitzeu el nostre servei, ??s possible que us demanem que ens proporcioneu certa informaci?? d???identificaci?? personal que es pot utilitzar per posar-vos en contacte o identificar-vos. La informaci?? d'identificaci?? personal pot incloure, entre d'altres:

                            Correu electr??nic

                            Nom i cognoms

                            Dades d?????s

                            Dades d?????s
                            Les dades d?????s es recopilen autom??ticament quan s???utilitza el Servei.

                            Les dades d?????s poden incloure informaci?? com ara l???adre??a de protocol d???Internet del vostre dispositiu (per exemple, adre??a IP), el tipus de navegador, la versi?? del navegador, les p??gines del nostre servei que visiteu, l???hora i la data de la vostra visita, el temps dedicat a aquestes p??gines, el dispositiu ??nic identificadors i altres dades de diagn??stic.

                            Quan accediu al servei mitjan??ant un dispositiu m??bil o mitjan??ant un dispositiu m??bil, ??s possible que recopilem certa informaci?? de manera autom??tica, incloent, entre d???altres, el tipus de dispositiu m??bil que utilitzeu, l???identificador ??nic del vostre dispositiu m??bil, l???adre??a IP del vostre dispositiu m??bil i el vostre m??bil. sistema operatiu, el tipus de navegador d'Internet m??bil que utilitzeu, identificadors de dispositiu ??nics i altres dades de diagn??stic.

                            Tamb?? podem recopilar informaci?? que el vostre navegador envia cada vegada que visiteu el nostre servei o quan accediu al servei mitjan??ant o mitjan??ant un dispositiu m??bil.

                            Informaci?? de serveis de xarxes socials de tercers
                            L???empresa us permet crear un compte i iniciar la sessi?? per utilitzar el servei a trav??s dels seg??ents serveis de xarxes socials de tercers:

                            Google
                            Facebook
                            Twitter
                            Si decidiu registrar-vos o concedir-nos acc??s a un servei de xarxes socials de tercers, podem recopilar dades personals que ja estiguin associades al compte del vostre servei de xarxes socials de tercers, com ara el vostre nom, la vostra adre??a de correu electr??nic, les vostres activitats o La vostra llista de contactes associada amb aquest compte.

                            Tamb?? podeu tenir l'opci?? de compartir informaci?? addicional amb l'empresa a trav??s del compte del vostre servei de xarxes socials de tercers. Si opteu per proporcionar aquesta informaci?? i dades personals, durant el registre o d???una altra manera, doneu perm??s a l???empresa per utilitzar-la, compartir-la i emmagatzemar-la de manera compatible amb aquesta pol??tica de privadesa.

                            ??s de les vostres dades personals
                            La companyia pot utilitzar dades personals per a les finalitats seg??ents:

                            Per proporcionar i mantenir el nostre Servei , incl??s per supervisar l?????s del nostre Servei.

                            Per gestionar el vostre compte: per gestionar el vostre registre com a usuari del Servei. Les dades personals que proporcioneu us poden donar acc??s a diferents funcions del servei que teniu a la vostra disposici?? com a usuari registrat.

                            Per a l'execuci?? d'un contracte: desenvolupament, compliment i comprom??s del contracte de compra dels productes, articles o serveis que heu comprat o de qualsevol altre contracte amb nosaltres a trav??s del Servei.

                            Per contactar-vos: per contactar-vos per correu electr??nic, trucades telef??niques, SMS o altres formes equivalents de comunicaci?? electr??nica, com ara les notificacions push d???una aplicaci?? m??bil sobre actualitzacions o comunicacions informatives relacionades amb les funcionalitats, productes o serveis contractats, incloses les actualitzacions de seguretat, quan sigui necessari o raonable per a la seva implementaci??.

                            Per proporcionar-vos not??cies, ofertes especials i informaci?? general sobre altres b??ns, serveis i esdeveniments que oferim, que s??n similars als que ja heu comprat o que heu consultat, tret que hagueu optat per no rebre aquesta informaci??.

                            Per gestionar les vostres sol??licituds: per atendre i gestionar les vostres sol??licituds.

                            Per a transfer??ncies empresarials: podem utilitzar la vostra informaci?? per avaluar o dur a terme una fusi??, desinversi??, reestructuraci??, reorganitzaci??, dissoluci?? o altra venda o transfer??ncia d'alguns o de tots els nostres actius, ja sigui com a empresa en curs o com a part de fallida, liquidaci??, o un procediment similar, en el qual les dades personals que mantenim sobre els usuaris del nostre servei es troben entre els actius transferits.

                            Per a altres prop??sits : podem utilitzar la vostra informaci?? per a altres fins, com ara l???an??lisi de dades, la identificaci?? de tend??ncies d?????s, la determinaci?? de l???efic??cia de les nostres campanyes promocionals i per avaluar i millorar el nostre servei, productes, serveis, m??rqueting i la vostra experi??ncia.

                            Podem compartir la vostra informaci?? personal en les situacions seg??ents:

                            Amb prove??dors de serveis: podem compartir la vostra informaci?? personal amb prove??dors de serveis per supervisar i analitzar l?????s del nostre servei, per contactar-vos.
                            Per a transfer??ncies empresarials: podem compartir o transferir la vostra informaci?? personal en relaci?? amb, o durant les negociacions, de qualsevol fusi??, venda d???actius de l???empresa, finan??ament o adquisici?? de tot o una part del nostre negoci a una altra empresa.
                            Amb afiliats: podem compartir la vostra informaci?? amb els nostres afiliats, en aquest cas els requerirem que respectin aquesta pol??tica de privadesa. Les empreses afiliades inclouen la nostra empresa matriu i qualsevol altra filial, socis d???empresa conjunta o altres empreses que controlem o que estiguin sota control com?? amb nosaltres.
                            Amb socis comercials: podem compartir la vostra informaci?? amb els nostres socis comercials per oferir-vos determinats productes, serveis o promocions.
                            Amb altres usuaris: quan compartiu informaci?? personal o interactueu d'una altra manera a les zones p??bliques amb altres usuaris, la informaci?? pot ser vista per tots els usuaris i es pot distribuir p??blicament fora. Si interactueu amb altres usuaris o us registreu a trav??s d???un servei de xarxes socials de tercers, ??s possible que els vostres contactes del servei de xarxes socials de tercers vegin el vostre nom, perfil, imatges i descripci?? de la vostra activitat. De la mateixa manera, altres usuaris podran veure les descripcions de la vostra activitat, comunicar-vos amb vosaltres i veure el vostre perfil.
                            Amb el vostre consentiment : podem revelar la vostra informaci?? personal amb qualsevol altre prop??sit amb el vostre consentiment.
                            Conservaci?? de les vostres dades personals
                            L???empresa conservar?? les vostres dades personals nom??s el temps que sigui necessari per a les finalitats establertes en aquesta pol??tica de privadesa. Conservarem i utilitzarem les vostres dades personals en la mesura necess??ria per complir amb les nostres obligacions legals (per exemple, si se???ns exigeix ??????conservar les vostres dades per complir amb les lleis aplicables), resoldre conflictes i aplicar els nostres acords i pol??tiques legals.

                            L???empresa tamb?? conservar?? les dades d?????s a efectes d???an??lisi interna. Les dades d?????s es conserven generalment durant un per??ode de temps m??s curt, excepte quan aquestes dades s???utilitzen per refor??ar la seguretat o per millorar la funcionalitat del nostre servei, o estem obligats legalment a conservar aquestes dades durant per??odes de temps m??s llargs.

                            Transfer??ncia de les vostres dades personals
                            La vostra informaci??, incloses les dades personals, es processa a les oficines operatives de la companyia i en qualsevol altre lloc on es trobin les parts implicades en el tractament. Vol dir que aquesta informaci?? es pot transferir a ordinadors ubicats fora del vostre estat, prov??ncia, pa??s o qualsevol altra jurisdicci?? governamental on es mantinguin les vostres lleis de protecci?? de dades que les de la vostra jurisdicci??.

                            El vostre consentiment a aquesta pol??tica de privadesa seguit de l???enviament d???aquesta informaci?? representa el vostre acord amb aquesta transfer??ncia.

                            L???empresa prendr?? totes les mesures raonablement necess??ries per garantir que les vostres dades siguin tractades de forma segura i d???acord amb aquesta pol??tica de privadesa i que no es realitzi cap transfer??ncia de les vostres dades personals a una organitzaci?? o a un pa??s tret que hi hagi controls adequats, inclosa la seguretat de Les vostres dades i altra informaci?? personal.

                            Divulgaci?? de les vostres dades personals
                            Transaccions comercials
                            Si la companyia participa en una fusi??, adquisici?? o venda d???actius, es poden transferir les vostres dades personals. Us avisarem abans que les vostres dades personals siguin transferides i quedin subjectes a una pol??tica de privadesa diferent.

                            Aplicaci?? de la llei
                            En determinades circumst??ncies, es pot requerir a la Companyia que reveli les vostres dades personals si la llei ho requereix o en resposta a sol??licituds v??lides de les autoritats p??bliques (per exemple, un tribunal o una ag??ncia governamental).

                            Altres requisits legals
                            L???empresa pot revelar les vostres dades personals amb la bona fe creient que aquesta acci?? ??s necess??ria per:

                            Complir una obligaci?? legal
                            Protegir i defensar els drets o la propietat de la Companyia
                            Prevenir o investigar possibles faltes relacionades amb el Servei
                            Protegiu la seguretat personal dels usuaris del Servei o del p??blic
                            Protegiu-vos de la responsabilitat legal
                            Seguretat de les vostres dades personals
                            La seguretat de les vostres dades personals ??s important per a nosaltres, per?? recordeu que cap m??tode de transmissi?? per Internet ni cap m??tode d???emmagatzematge electr??nic ??s 100% segur. Tot i que ens esforcem per utilitzar mitjans comercialment acceptables per protegir les vostres dades personals, no podem garantir-ne la seguretat absoluta.

                            Privadesa dels nens
                            El nostre servei no s???adre??a a ning?? menor de 13 anys. No recopilem conscientment informaci?? d???identificaci?? personal de ning?? menor de 13 anys. Si sou pare o tutor i sou conscient que el vostre fill ens ha proporcionat dades personals, si us plau poseu-vos en contacte amb nosaltres. Si ens adonem que hem recopilat dades personals de menors de 13 anys sense verificar el consentiment dels pares, prenem mesures per eliminar aquesta informaci?? dels nostres servidors.

                            Si necessitem confiar en el consentiment com a base legal per processar la vostra informaci?? i el vostre pa??s requereix el consentiment dels pares, ??s possible que necessitem el consentiment dels vostres pares abans de recopilar i utilitzar aquesta informaci??.

                            Enlla??os a altres llocs web
                            El nostre Servei pot contenir enlla??os a altres llocs web que no operem per nosaltres. Si feu clic a un enlla?? de tercers, se us dirigir?? al lloc d'aquest tercer. Us aconsellem que reviseu la pol??tica de privadesa de tots els llocs que visiteu.

                            No tenim control ni assumim cap responsabilitat pel contingut, les pol??tiques de privadesa o les pr??ctiques de llocs o serveis de tercers.

                            Canvis en aquesta pol??tica de privadesa
                            Podem actualitzar la nostra pol??tica de privadesa de tant en tant. Us notificarem qualsevol canvi publicant la nova Pol??tica de privadesa en aquesta p??gina.

                            Us ho farem saber per correu electr??nic i / o un av??s destacat sobre el nostre servei, abans que el canvi entri en vigor i actualitzarem la data "??ltima actualitzaci??" a la part superior d'aquesta Pol??tica de privadesa.

                            Us recomanem que reviseu aquesta Pol??tica de privadesa peri??dicament si hi ha canvis. Els canvis en aquesta pol??tica de privadesa s??n efectius quan es publiquen en aquesta p??gina.

                            Poseu-vos en contacte amb nosaltres
                            Si teniu cap pregunta sobre aquesta pol??tica de privadesa, podeu contactar amb nosaltres:

                            Per correu electr??nic: gamesleague@gmail.com
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
    <!--<form method='POST' action="<?php echo site_url('torneig/inscribir') ?>">
        <input type='hidden' name='idPa' value='<?php echo $a[$cont]["Id_Pa_To_Us"]; ?>'>
        <button>I</button>
    </form>-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js " integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns " crossorigin="anonymous "></script>
    <meta name="viewport " content="width=device-width, initial-scale=1.0 ">
</body>

</html>