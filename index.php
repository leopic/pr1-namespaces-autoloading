<?php

/**
 * index.php
 * Entrada de nuestra aplicacion.
 */

require "app/bootstrap.php";

$controladorCalcuadora = new App\Controladores\CalculadoraControlador();
$resultado = $controladorCalcuadora->sumar(5, 10);
print($resultado);
