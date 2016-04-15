<?php

namespace spec\Acme;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class EmpleadoVoluntarioSpec extends ObjectBehavior
{
    function let(){
        $this->beConstructedWith([
            'nombre' => 'jos',
            'apellido' => 'var',
            'edad' => 99
        ]);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Acme\EmpleadoVoluntario');
    }

    function it_calcula_el_sueldo_de_un_voluntario() {
        $this->calcularSueldo()->shouldReturn(0);
    }
}
