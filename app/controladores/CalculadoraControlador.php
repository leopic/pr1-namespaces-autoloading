<?php

/**
 * CalculadoraControlador.php
 */

namespace App\Controladores;

use App\Servicios\CalculadoraService;

class CalculadoraControlador
{
    private $nombre;

    /**
     * CalculadoraControlador constructor.
     */
    public function __construct()
    {
        $this->nombre = 'Clase Controladora';
    }

    /**
     * @param integer $primerValor
     * @param integer $segundoValor
     * @return integer
     */
    public function sumar($primerValor, $segundoValor)
    {
        $servicio = new CalculadoraService();
        return $servicio->sumar($primerValor, $segundoValor);
    }

}
