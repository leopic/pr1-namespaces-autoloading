<?php

/**
 * bootstrap.php
 * Inicio, no visual, de la aplicación.
 * Carga todas las dependencias.
 */

// Composer carga cada dependencia instalada através suyo
require "vendor/autoload.php";

// Pero todavia tenemos que cargar las propias
require_once("vendor/SplClassLoader.php");

$classLoader = new SplClassLoader("App");
$classLoader->register();
