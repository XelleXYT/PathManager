<?php

function conectaBBDD() {

    require('config/config.php');

    $conecta = new mysqli($servidor, $usuario_mysql, $clave_mysql, $bbdd);

    $conecta->query("SET NAMES utf8");

    return $conecta;
}

?>
