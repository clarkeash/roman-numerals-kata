<?php

namespace spec\App;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RomanSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('App\Roman');
    }

    /**
     * @test
     */
    public function it_calculates_numeral_for_1()
    {
        $this->convert(1)->shouldReturn('I');
    }

    /**
     * @test
     */
    public function it_calculates_numeral_for_2()
    {
        $this->convert(2)->shouldReturn('II');
    }

    /**
     * @test
     */
    public function it_calculates_numeral_for_4()
    {
        $this->convert(4)->shouldReturn('IV');
    }

    /**
     * @test
     */
    public function it_calculates_numeral_for_5()
    {
        $this->convert(5)->shouldReturn('V');
    }

    /**
     * @test
     */
    public function it_calculates_numeral_for_6()
    {
        $this->convert(6)->shouldReturn('VI');
    }

    /**
     * @test
     */
    public function it_calculates_numeral_for_9()
    {
        $this->convert(9)->shouldReturn('IX');
    }

    /**
     * @test
     */
    public function it_calculates_numeral_for_10()
    {
        $this->convert(10)->shouldReturn('X');
    }

    /**
     * @test
     */
    public function it_calculates_numeral_for_40()
    {
        $this->convert(40)->shouldReturn('XL');
    }

    /**
     * @test
     */
    public function it_calculates_numeral_for_50()
    {
        $this->convert(50)->shouldReturn('L');
    }

    /**
     * @test
     */
    public function it_calculates_numeral_for_90()
    {
        $this->convert(90)->shouldReturn('XC');
    }

    /**
     * @test
     */
    public function it_calculates_numeral_for_99()
    {
        $this->convert(99)->shouldReturn('XCIX');
    }

    /**
     * @test
     */
    public function it_calculates_numeral_for_100()
    {
        $this->convert(100)->shouldReturn('C');
    }

    /**
     * @test
     */
    public function it_calculates_numeral_for_400()
    {
        $this->convert(400)->shouldReturn('CD');
    }

    /**
     * @test
     */
    public function it_calculates_numeral_for_500()
    {
        $this->convert(500)->shouldReturn('D');
    }

    /**
     * @test
     */
    public function it_calculates_numeral_for_901()
    {
        $this->convert(901)->shouldReturn('CMI');
    }

    /**
     * @test
     */
    public function it_calculates_numeral_for_1000()
    {
        $this->convert(1000)->shouldReturn('M');
    }

    /**
     * @test
     */
    public function it_calculates_numeral_for_1954()
    {
        $this->convert(1954)->shouldReturn('MCMLIV');
    }

    /**
     * @test
     */
    public function it_calculates_numeral_for_2016()
    {
        $this->convert(2016)->shouldReturn('MMXVI');
    }
}
