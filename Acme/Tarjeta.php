<?php namespace Acme;


class Tarjeta
{

    protected $horas;
    protected $sueldoHora;
    
 
    public function __construct($horas, $sueldoHora)
    {
        $this->horas = $horas;
        $this->sueldoHora = $sueldoHora;
    }
    
    public function calcularGanancia() {
        return $this->horas * $this->sueldoHora;
    }
}