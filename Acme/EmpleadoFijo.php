<?php namespace Acme;


class EmpleadoFijo extends Empleado
{

    protected $sueldoFijo;

    /**
     * EmpleadoFijo constructor.
     * @param array $datos
     * @param int $sueldoFijo
     */
    public function __construct($datos, $sueldoFijo)
    {
        parent::__construct($datos);
        $this->sueldoFijo = $sueldoFijo;
    }

    public function calcularSueldo()
    {
        return $this->sueldoFijo;
    }
}