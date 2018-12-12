<!DOCTYPE html>
<!--
index del proyecto PathManager
-->
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <title>PathManager</title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container" id="principal">
            <div class="row">
                <div class="col-12 banner">
                    <h1 class="text-center">PathManager</h1>
                    <h2 class="text-center">Inicio de sesión</h2>
                </div>
            </div>
            <div class="row contentbody">
                <div class="col-md-2"></div>
                <div class="col-md-8" style="padding: 25px;">
                    <br/>
                    <input id="nameBox" class="form-control" type="text" placeholder="Usuario" required="required">
                    <br/>
                    <input id="passBox" class="form-control" type="password" placeholder="Contraseña" required="required">
                    <br/>
                    <button type="submit" class="btn btn-primary btn-block" id="botonLogin">Login</button>
                    <br/>
                    <button type="submit" class="btn btn-primary btn-block" id="botonRegistro">Registrarse</button>
                    <br/>
                </div>
                <div class="col-md-2"></div>        
            </div>      
        </div>

        <div id="modalError" class="modal" tabindex="-1" role="dialog" style="color:darkgray;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Error</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Nombre de usuario o contraseña incorrectos.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
    
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

    <script>
        var sesion;
        $('#botonLogin').click(function () {
            //Vamos a leer el contenido de la caja y guardarlo en una variable.
            var _namebox = $('#nameBox').val();
            var _passbox = $('#passBox').val();
            //Cargamos el archivo que vamos a leer para hacer la comprobación.
            $('body').load("login.php", {
                namebox: _namebox,
                passbox: _passbox
            });
            sesion = true;
        });

        $('#botonRegistro').click(function () {
            var _namebox = $('#nameBox').val();
            console.log(_namebox);
            var _passbox = $('#passBox').val();

            if (_passbox != null) {
                $('body').load("registro.php", {
                    namebox: _namebox,
                    passbox: _passbox
                });
            } else {
                muestraModal();
            }

        });

        function muestraModal() {
            $('#modalError').modal('show');

        }
        ;
    </script>
</html>
