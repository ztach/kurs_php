<?php

namespace Ztach\Game;

class Truck  extends AbstractVehicle 
{
    // public function move() : void
    // {
    //     echo sprintf("\njedzie ciężarówa: %s z szybkością: %d", $this->model, $this->speed->getValue()  );
    // }

    protected function getName() : string
    {
        return 'CIĘŻARÓWA';
    }


    protected function distanceMove() : void 
    {
        $this->distance += $this->speed->getValue() * rand(80,100)/100;
    }


}