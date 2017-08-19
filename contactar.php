<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web hosting en Chile y Servidores Virtuales - Contactar</title>
    <?php include('modulos/link-css.php'); ?>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
    <?php include('modulos/menu.php'); ?>
    <section id="hosting-contactar" class="vh-45 back-up">
        <h1 class="s-margin center-align titulo-h1">Siempre Conectados Contigo</h1>
    </section>
    <section class="padding-30">
        <h4 class="center-align">Medios De Contacto</h4>
        <p class="center-align">Horarios de atención:</p>
        <p class="center-align">Lunes a Viernes desde las 09:00 a 20:00 (horario continuado) Call center/Chat</p>
        <p class="center-align">Lunes a Domingo 24/7 vía Ticket</p>
        <div class="container row">
            <div class="col l6 s12 center-align">
                <span class="btn-floating btn-large waves-effect waves-light blue darken-1"><i class="material-icons">place</i></span>
                <h5>Dirección</h5>
                <p>Manquehue Sur #520 of.205,</p>
                <p>Las Condes, Región Metropolitana.</p>
            </div>
            <div class="col l6 s12 center-align">
                <span class="btn-floating btn-large waves-effect waves-light blue darken-1"><i class="material-icons">call</i></span>
                <h5>Teléfono</h5>
                <p>+56 2 2570 9843</p>
            </div>
        </div>
    </section>
    <section id="formulario" class="grey lighten-4 s-margin padding-30">
        <div class="row">
            <div class="col l4 s12 padding-15">
                <div id="call" class="col s12 padding-10">
                    <div class="col s2">
                        <span class="btn-floating btn-large waves-effect waves-light blue darken-1"><i class="material-icons">call</i></span>
                    </div>
                    <div class="col s10">
                        <h6>CALL CENTER</h6>
                        <h5>+56 2 2570 9843</h5>
                    </div>
                </div>
                <hr>
                <div class="col s12 padding-10">
                    <div class="col s2">
                        <span class="btn-floating btn-large waves-effect waves-light blue darken-1"><i class="material-icons">exit_to_app</i></span>
                    </div>
                    <div class="col s10">
                        <p>ÁREA COMERCIAL/SOPORTE</p>
                        <a href="" class="btn blue lighten-2">Abrir Ticket de Soporte</a>
                    </div>
                </div>
            </div>
            <div id="contact" class="col l8 s12 padding-15">
                <form id="contact_form" class="col s12">
                    <h5>Contáctenos</h5>
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="icon_prefix" type="text" class="validate">
                            <label for="icon_prefix">Nombre</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">mail_outline</i>
                            <input id="icon_telephone" type="tel" class="validate">
                            <label for="icon_telephone">Email</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="material-icons prefix">mode_edit</i>
                            <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
                            <label for="icon_prefix2">Escriba su mensaje</label>
                        </div>
                    </div>
                    <div class="g-recaptcha" data-sitekey="6Lc3HioUAAAAABzBjt4m5Br3jmz-3OTH0FjN5mRb" data-callback="mostrar"></div>
                    <div class="clearfix"></div>
                    <br>
                    <button id="enviar" class="btn waves-effect waves-light blue lighten-2 hide" type="submit" name="action" v-on:click="validar($event)">Enviar Mensaje
                        <i class="material-icons right">send</i>
                    </button>
                </form>
            </div>
        </div>
    </section>
    <?php include('modulos/tecnologias.php'); ?>
    <?php include('modulos/footer.php'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.2/vue.min.js"></script>    
    <script>
        mostrar = function(){
            $('#enviar').removeClass('hide');
        }
        var app = new Vue({
            el : '#contact',            
            methods : {
                validar : function(event){
                    var formulario = $('#contact_form');
                    event.preventDefault();
                    $.post(
                        "validar.php",
                        formulario.serialize(),
                        function(data){
                            console.log(data);
                            // if(data.respuesta){
                            //     console.log('funciona');
                            // }else{
                            //     console.log('no es humano');
                            // }
                        }
                    );
                }
            }
        })
    </script>
</body>
</html>