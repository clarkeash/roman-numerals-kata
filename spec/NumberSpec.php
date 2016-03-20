<?php

namespace spec\App;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NumberSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('App\Number');
    }

    /**
     * @test
     */
    public function it_calculates_number_for_I()
    {
        $this->convert('I')->shouldReturn(1);
    }

    /**
     * @test
     */
    public function it_calculates_number_for_II()
    {
        $this->convert('II')->shouldReturn(2);
    }

    /**
     * @test
     */
    public function it_calculates_number_for_IV()
    {
        $this->convert('IV')->shouldReturn(4);
    }

    /**
     * @test
     */
    public function it_calculates_number_for_V()
    {
        $this->convert('V')->shouldReturn(5);
    }

    /**
     * @test
     */
    public function it_calculates_number_for_VI()
    {
        $this->convert('VI')->shouldReturn(6);
    }

    /**
     * @test
     */
    public function it_calculates_number_for_IX()
    {
        $this->convert('IX')->shouldReturn(9);
    }

    /**
     * @test
     */
    public function it_calculates_number_for_X()
    {
        $this->convert('X')->shouldReturn(10);
    }

    /**
     * @test
     */
    public function it_calculates_number_for_XL()
    {
        $this->convert('XL')->shouldReturn(40);
    }

    /**
     * @test
     */
    public function it_calculates_number_for_L()
    {
        $this->convert('L')->shouldReturn(50);
    }

    /**
     * @test
     */
    public function it_calculates_number_for_XC()
    {
        $this->convert('XC')->shouldReturn(90);
    }

    /**
     * @test
     */
    public function it_calculates_number_for_XCIX()
    {
        $this->convert('XCIX')->shouldReturn(99);
    }

    /**
     * @test
     */
    public function it_calculates_number_for_C()
    {
        $this->convert('C')->shouldReturn(100);
    }

    /**
     * @test
     */
    public function it_calculates_number_for_CD()
    {
        $this->convert('CD')->shouldReturn(400);
    }

    /**
     * @test
     */
    public function it_calculates_number_for_D()
    {
        $this->convert('D')->shouldReturn(500);
    }

    /**
     * @test
     */
    public function it_calculates_number_for_CMI()
    {
        $this->convert('CMI')->shouldReturn(901);
    }

    /**
     * @test
     */
    public function it_calculates_number_for_M()
    {
        $this->convert('M')->shouldReturn(1000);
    }

    /**
     * @test
     */
    public function it_calculates_number_for_MCMLIV()
    {
        $this->convert('MCMLIV')->shouldReturn(1954);
    }

    /**
     * @test
     */
    public function it_calculates_number_for_MMXVI()
    {
        $this->convert('MMXVI')->shouldReturn(2016);
    }
}
