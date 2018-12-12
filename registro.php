<?php

session_start(); // Inicia o continua la sesión del navegador en el servidor PHP

include('funciones.php');

$mysqli=conectaBBDD();

function limpiaPalabra($palabra) {
    $palabra = trim($palabra, "'");
    $palabra = trim($palabra, " ");
    $palabra = trim($palabra, "-");
    $palabra = trim($palabra, "`");
    $palabra = trim($palabra, "´");
    $palabra = trim($palabra, '"');
    $palabra = trim($palabra, "(");
    $palabra = trim($palabra, ")");
    $palabra = trim($palabra, "&");
    $palabra = trim($palabra, ";");
    $palabra = trim($palabra, "<");
    $palabra = trim($palabra, ">");

    return $palabra;
}

$cajanombre = limpiaPalabra($_POST['namebox']);
$cajapassword = limpiaPalabra($_POST['passbox']);

//echo $cajanombre;
//echo $cajapassword;

$passEncriptada= password_hash($cajapassword, PASSWORD_BCRYPT);

//echo $passEncriptada;

$resultadoQuery = $mysqli->query("INSERT INTO usuarios(userName,userPass) VALUES ('$cajanombre','$passEncriptada')");
?>

