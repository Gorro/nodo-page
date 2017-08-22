<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web hosting en Chile NODOHOST - Nuestra Empresa</title>
    <?php include('modulos/link-css.php'); ?>
</head>
<body>
    <?php include('modulos/menu.php'); ?>
    <section id="hosting-vps" class="vh-45 back-up">
        <h1 class="s-margin center-align titulo-h1">Servidores Virtuales</h1>
    </section>
    <section class="grey lighten-4 padding-30">
        <div class="container">
            <h5>RECURSOS EXCLUSIVOS Y GARANTIZADO PARA TU VPS</h5>
            <p>Con tu VPS no compartes CPU, memoria RAM, Disco o Sistema Operativo. Tienes tu propio servidor a un menor precio que uno dedicado pero con toda la potencia, mejor rendimiento, seguridad y control que un Hosting compartido.</p>
            <p>La mejor opción si buscas independencia y FULL acceso, sin lugar a dudas la obtendrás con un Servidor Virtual totalmente administrado por ti.</p>
        </div>
    </section>
    <?php include('modulos/planes_vps.php'); ?>   
    <section class="grey lighten-4 padding-30">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5><i class="material-icons">thumb_up</i> Caracteristicas</h5>                    
                    <ul class="browser-default list-circle">
                        <li>Administrado por cliente</li>
                        <li>Tráfico ilimitado</li>
                        <li>Enlace nacional 1 GBits(compartido)</li>
                        <li>Enlace internacional 512 Kbits(dedicado)</li>
                    </ul>
                </div>
                <div class="col l6 s12">
                    <h5><i class="material-icons">settings</i> SERVICIO ADICIONALES (OPCIONAL)</h5>
                    <ul class="browser-default list-circle">
                        <li>Softaculous:$5.000</li>
                        <li>Licencia CPanel: $10.000</li>
                        <li>Cloudlinux: $10.000</li>
                        <li>IP adicional:$3.000</li>
                    </ul>                   
                </div>
            </div>            
        </div>
    </section>
    <section id="hosting-card" class="nodo-blue padding-30">
        <div class="container">
            <div class="row">
                <div class="col l4">
                    <span class="btn-floating  blue darken-1"><i class="material-icons">headset_mic</i></span>
                    <h6>FULL INDEPENDENCIA</h6>
                    <p class="white-text">Ahora no solo tendrás independencia en tus recursos, sino también en la configuración de tu sistema operativo</p>
                </div>
                <div class="col l4">
                    <span class="btn-floating  blue darken-1"><i class="material-icons">person_add</i></span>
                    <h6>ACCESO ROOT</h6>
                    <p class="white-text">Administra tu servidor virtual mediante SSH</p>
                </div>
                <div class="col l4">
                    <span class="btn-floating  blue darken-1"><i class="material-icons">desktop_windows</i></span>
                    <h6>PANEL DE CONTROL</h6>
                    <p class="white-text">Puedes optar a la administración de tu VPS mediante Cpanel, panel de control con una interfaz fácil de usar y administrar</p>
                </div>      
            </div>
            <div class="row">
                <div class="col l4">
                    <span class="btn-floating  blue darken-1"><i class="material-icons">network_check</i></span>
                    <h6>99,9% UPTIME</h6>
                    <p class="white-text">Con nuestros enlaces redundantes y las tecnologías utilizadas en nuestros servidores, garantizamos el tiempo en linea de nuestros servidores</p>
                </div>
                <div class="col l4">
                    <span class="btn-floating  blue darken-1"><i class="material-icons">folder_open</i></span>
                    <h6>SISTEMA OPERATIVO</h6>
                    <p class="white-text">Por defecto todos nuestros VPS vienen pre-instalados con Centos, por el uso opcional de Cpanel</p>
                </div>
                <div class="col l4">
                    <span class="btn-floating  blue darken-1"><i class="material-icons">settings_backup_restore</i></span>
                    <h6>RESPALDOS</h6>
                    <p class="white-text">Se realizan copias de seguridad semanales de los servidores virtuales</p>
                </div>      
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <ul class="collapsible" data-collapsible="accordion">
                <li>
                    <div class="collapsible-header"><i class="material-icons">filter_drama</i>¿Que es un VPS?</div>
                    <div class="collapsible-body"><span>Un VPS es un servidor virtual con recursos propios y sistema operativo independiente, que podemos administrar mediante SSH y trabajarlo como un servidor dedicado..</span></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">thumb_up</i>¿Cuales son sus beneficios?</div>
                    <div class="collapsible-body">
                        <span>
                            Al igual que un servidor dedicado, los servidores virtuales tienen recursos asignados que no son compartidos con otras máquinas virtuales, tales como:
                            <ul class="browser-default list-circle">
                                <li>CPU</li>
                                <li>Memoria RAM</li>
                                <li>Espacio de memoria en disco</li>
                                <li>Configuración</li>
                                <li>Sistema operativo</li>
                            </ul>
                        </span>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">highlight</i>¿Cómo funciona una maquina virtual?</div>
                    <div class="collapsible-body"><span>Una máquina virtual está dentro de un servidor físico y a ella se le asignan recursos propios para su trabajo. Estos recursos no son compartidos con otras máquinas virtuales, sólo comparten la utilización del espacio físico, pero cada una trabaja de forma independiente.</span></div>
                </li>
            </ul>
        </div>
    </section>
    <?php include('modulos/tecnologias.php'); ?>
    <?php include('modulos/footer.php'); ?>
    <script>
        $(document).ready(function(){
            $('.collapsible').collapsible();
        });
    </script>
</body>
</html>