<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$mysqli = new mysqli('localhost:3306', 'root', 'adminPassword', 'platos');

if ($mysqli->connect_errno) {
    echo "Se ha producido un error al conectar a MySQL (".
    $mysqli->connect_errno.") ".
    $mysqli->connect_error;
} else {
    echo "Conectado a la BBDD de MySQL";
}

?>