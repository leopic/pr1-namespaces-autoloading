<?php

/**
 * index.php
 * Entrada de nuestra aplicacion.
 */

require "app/bootstrap.php";

use App\Controladores\CalculadoraControlador;

// Creamos una nueva aplicación
$app = new \Slim\App;

// Definimos una primera ruta
$app->get('/calculadora/sumar/{primerValor}/{segundoValor}', function ($request, $response, $args) {
    $controlador = new CalculadoraControlador();
    $resultado = $controlador->sumar($args['primerValor'], $args['segundoValor']);
    return $response->write($resultado);
});

// Corremos la aplicación
$app->run();
