<?php

namespace spec\Acme;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class EmpleadoHoraSpec extends ObjectBehavior
{
    function let() {
        $this->beConstructedWith([
            'nombre' => 'jos',
            'apellido' => 'var',
            'edad' => 99
        ]);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Acme\EmpleadoHora');
    }

    function it_calcula_el_sueldo_de_un_empleado_con_sueldo_x_hora($t1, $t2) {

        $t1->beADoubleOf('Acme\Tarjeta');
        $t1->calcularGanancia()->willReturn(900);

        $t2->beADoubleOf('Acme\Tarjeta');
        $t2->calcularGanancia()->willReturn(1300);

        $this->agregarTarjeta($t1);
        $this->agregarTarjeta($t2);

        $this->calcularSueldo()->shouldReturn(2200);
    }

}
