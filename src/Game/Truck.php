<?php

namespace Ztach\Game;

class Truck  extends AbstractVehicle 
{

    public function getName() : string
    {
        return 'TRUCK ' . $this->make . ' ' . $this->model;
    }

    protected function distanceMove() : void 
    {
        $this->distance += $this->speed->getValue() * rand(80,100)/100;
    }


}