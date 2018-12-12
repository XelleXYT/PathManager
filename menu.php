<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<body>
    <div class="container" id="principal">
        <div class="row banner">
            <div class="col-12">
                <h1 class="text-center">PathManager</h1>
                <h2 class="text-center" id="subtitulo">Menu</h2>
            </div>
        </div>
        <div class="row contentbody" id="secundario">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <br/>
                <p><a id="fichaPersonaje" class="btn btn-block btn-danger" onclick="sigue('1');">Ficha de Personaje</a></p>
                <p><a id="herramientasJugador" class="btn btn-block btn-danger" onclick="sigue('2');">Herramienta Jugador</a></p>
                <p><a id="herramientasGM" class="btn btn-block btn-danger" onclick="sigue('3');">Herramienta GM</a></p>
                <p><a id="creditos" class="btn btn-block btn-danger" onclick="sigue('4');">Créditos</a></p>
            </div>
            <div class="col-md-3"></div>
        </div>     
    </div>
</body>
<script>
    function sigue(_util) {
        switch (_util) {
            case '1':
                $('#subtitulo').text('Ficha de Personaje');
                $('#secundario').load('fichaPersonaje.php');
                break;
            case '2':
                $('#subtitulo').text('Herramientas Jugador');
                $('#secundario').load('herramientasJugador.php');
                break;
            case '3':
                $('#subtitulo').text('Herramientas GM');
                $('#secundario').load('herramientasGM.php');
                break;
            case '4':
                $('#subtitulo').text('Créditos');
                $('#secundario').load('creditos.php');
                break;
        }
    }
</script>


