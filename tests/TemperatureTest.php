<?php

namespace Jeremynikolic\WebinarPhp\Tests;

use Jeremynikolic\WebinarPhp\Temperature;
use PHPUnit\Framework\TestCase;

class TemperatureTest extends TestCase
{
    /** @test */
    public function it_can_convert_celsius_to_fahrenheit()
    {
        $fahrenheit = (new Temperature(10))->toFahrenheit();

        $this->assertEquals(50.0, $fahrenheit);
    }
}
