<?php

/**
 * bootstrap.php
 * Inicio, no visual, de la aplicación.
 * Carga todas las dependencias.
 */

require_once("vendor/SplClassLoader.php");

// Registramos cada una de los namespaces de la aplicación
$classLoader = new SplClassLoader('App');
$classLoader->register();
