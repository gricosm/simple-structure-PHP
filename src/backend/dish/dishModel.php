<?php

require_once '../databaseConnection.php';

function getAllDishes(): array {

    $res = $GLOBALS['mysqli']->query("SELECT * FROM platos.platos");
    $fila = $res->fetch_all();

    return $fila;

}

?>