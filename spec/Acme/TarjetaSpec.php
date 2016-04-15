<?php

namespace spec\Acme;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TarjetaSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(0,0);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Acme\Tarjeta');
    }

    function it_calcula_la_ganancia_hora_de_una_tarjeta() {
        $this->beConstructedWith(4, 250);
        $this->calcularGanancia()->shouldReturn(1000);
    }
}
