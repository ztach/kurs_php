<?php

namespace Ztach\Game;
 

class VehicleBuilder
{


    const CAR = VehicleFactory::CAR;
    const MOTOR = VehicleFactory::MOTOR;
    const TRUCK = VehicleFactory::TRUCK;

    public $make;
    public $model;
    public $speed;   


    public function setMake(string $make) : void
    {
        $this->make = $make;
    }


    public function setModel(string $model) : void
    {
        $this->model = $model;
    }

    public function setSpeed(Speed $speed) : void
    {
        $this->speed = $speed;
    }


    public function build() : Vehicle
    {
        $vehicle = null;

        switch ($this->make)
        {
            case self::CAR:
            case self::MOTOR:
            case self::TRUCK:
                $vehicle = VehicleFactory::factory($this->make, $this->model, $this->speed);
                break;

            default:
                   throw new \Exception('Could not recognise type');
        
        }

        return $vehicle;        
    }
}