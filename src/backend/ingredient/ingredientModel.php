<?php

require_once '../databaseConnection.php';

function getAllIngredients(): array {

    $res = $GLOBALS['mysqli']->query("SELECT * FROM platos.plato_ingrediente
    INNER JOIN platos.ingredientes
    ON plato_ingrediente.idplato = ingredientes.idingrediente
    ");
    $ingredientsAll = $res->fetch_all();

    return $ingredientsAll;

}

function getIngredientesByDish() : array {

    $res = $GLOBALS['mysqli']->query("SELECT * FROM platos.plato_ingrediente
    INNER JOIN platos.ingredientes
    ON plato_ingrediente.idplato = ingredientes.idingrediente
    WHERE plato_ingrediente.idplato = 1 
    ");
    $ingredientsByDish = $res->fetch_all();

    return $ingredientsByDish;
}

?>