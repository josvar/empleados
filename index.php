<?php
use Acme\EmpleadoHora;
use Acme\Tarjeta;

require __DIR__ . '/vendor/autoload.php';

function dd()
{
    array_map(function($x) { var_dump($x); }, func_get_args());
    die;
}

$empleadoHora = new EmpleadoHora([
    'nombre' => 'jos',
    'apellido' => 'var',
    'edad' => 99
]);

$empleadoHora->agregarTarjeta(new Tarjeta(4, 500));
$empleadoHora->agregarTarjeta(new Tarjeta(5, 500));
$empleadoHora->agregarTarjeta(new Tarjeta(2, 400));

dd($empleadoHora->calcularSueldo());