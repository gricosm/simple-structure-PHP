<?php

require_once '../databaseConnection.php';

function getAllTypes(): array {

    $res = $GLOBALS['mysqli']->query("SELECT * FROM platos.tipoplato");
    $fila = $res->fetch_all();

    return $fila;

}

?>