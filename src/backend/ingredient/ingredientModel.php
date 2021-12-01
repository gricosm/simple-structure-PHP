<?php

require_once '../databaseConnection.php';

function getAllIngredients(): array {

    $res = $GLOBALS['mysqli']->query("SELECT * FROM platos.ingredientes");
    $fila = $res->fetch_all();

    return $fila;

}

?>