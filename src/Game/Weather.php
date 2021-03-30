<?php


namespace Ztach\Game;

class Weather {
    private $current = 'shining'; 
    const RAINING = 'raining';
    const SHINING = 'shining';

    public function randomiseWeather() : void
    {
        $this->current = 0 ===  random_int(0,2) ? self::RAINING : self::SHINING;
    }


    public function isRaining() : bool
    {
        return $this->current === self::RAINING;
    }

    public function __toString() : string
    {
        return "Current weather: $this->current";
    }
}