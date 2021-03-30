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

    protected function distanceMove() : void 
    {
        $this->distance += $this->speed->getValue() * rand(70,100)/100;
    }

    public function drive() : void
    {
        echo "\nJadziem Panie Stachu\n";

    }
}
