<?php

namespace Ztach\Game;
 
class VehicleFactory 
{

    const CAR = 'car';
    const MOTOR = 'motor';
    const TRUCK = 'truck';


    public static function factory(string $make, string $model, Speed $speed) : Vehicle
    {
        $vehicle = null;

        switch ($make)
        {
            case self::CAR:
                $vehicle = new Car($make, $model, $speed);
                break;

            case self::MOTOR:
                $vehicle = new Motor($make, $model, $speed);
                break;

            case self::TRUCK:
                $vehicle = new Truck($make, $model, $speed);
                break;

            default:
                   throw new \Exception('Could not recognise type');
        
        }


        return $vehicle;
    }
}