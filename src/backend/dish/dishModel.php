<?php

require_once '../databaseConnection.php';

function getAllDishes(): array {

    $res = $GLOBALS['mysqli']->query("SELECT * FROM platos.platos");
    $dishes = $res->fetch_all();

    return $dishes;

}

function getDish(): array {

    $res = $GLOBALS['mysqli']->query("SELECT platos.platoid = $dishid FROM platos.platos");
    $dish = $res->fetch_all();

    return $dish;

}

?>