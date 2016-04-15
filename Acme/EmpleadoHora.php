<?php namespace Acme;


class EmpleadoHora extends Empleado
{

    protected $tarjetas = [];

    public function agregarTarjeta(Tarjeta $t) {
        $this->tarjetas[] = $t;
    }


    public function calcularSueldo()
    {
        $sum = 0;
        foreach ($this->tarjetas as $tarjeta) {
            $sum += $tarjeta->calcularGanancia();
        }
        
        return $sum;
    }
}