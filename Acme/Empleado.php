<?php namespace Acme;

abstract class Empleado
{

    protected $datos;


    /**
     * Empleado constructor.
     * @param $datos
     */
    public function __construct($datos)
    {
        $this->datos = $datos;
    }

    /**
     * @return int
     */
    abstract public function calcularSueldo();
}