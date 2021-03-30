<?php

namespace Ztach\Game;

class Car extends AbstractVehicle {


    public function getSpeed() {
        return $this->speed;
    }

    // public function move() : void
    // {
    //     echo sprintf("\njedzie samochód: %s z szybkością: %d", $this->model, $this->speed->getValue()  );
    // }

    protected function getName() : string
    {
        
        return 'SAMOCHÓD ' . $this->make . ' ' . $this->model;
    }

    public function drive() : void
    {
        echo "\nJadziem Panie Stachu\n";

    }
}
