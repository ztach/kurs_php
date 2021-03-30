<?php

namespace Ztach\Game;

class Motor  extends AbstractVehicle 
{
    // public function move() : void
    // {
    //     echo sprintf("\njedzie motor: %s z szybkością: %d", $this->model, $this->speed->getValue()  );
    // }

    protected function getName() : string
    {
        return 'MOTOR';
    }


    protected function distanceMove() : void 
    {
        $this->distance += $this->speed->getValue() * rand(50,120)/100;
    }



}