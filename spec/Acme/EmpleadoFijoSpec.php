<?php

namespace spec\Acme;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class EmpleadoFijoSpec extends ObjectBehavior
{
    function let() {
        $this->beConstructedWith([
            'nombre' => 'jos',
            'apellido' => 'var',
            'edad' => 99
        ], 3400);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Acme\EmpleadoFijo');
    }

    function it_calcula_el_sueldo_fijo_de_un_empleado() {
        $this->beConstructedWith([
            'nombre' => 'jos',
            'apellido' => 'var',
            'edad' => 99
        ], 4500);

        $this->calcularSueldo()->shouldReturn(4500);
    }
}
