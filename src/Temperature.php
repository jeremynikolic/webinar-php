<?php

namespace Jeremynikolic\WebinarPhp;

class Temperature
{
    protected float $celcius;

    public function __construct(float $celcius)
    {
        $this->celcius = $celcius;
    }

    public function toFahrenheit(): float
    {
        return ($this->celcius * 9 / 5) + 32;
    }
}
