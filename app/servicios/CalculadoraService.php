<?php

/**
 * CalculadoraService.php
 */

namespace App\Servicios;

class CalculadoraService
{

    /**
     * @param integer $primerValor
     * @param integer $segundoValor
     * @return integer
     */
    public function sumar($primerValor, $segundoValor)
    {
        return $primerValor + $segundoValor;
    }

}
