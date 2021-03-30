<?php

namespace Ztach\Game;
 
class Race
{
    private $distance = 0;
    private $maxTours = 5;
    private $weather;
    private $vehicles = [];

    public function __construct (Weather $weather, float $distance = 5)
    {
        $this->distance = $distance;
        $this->weather = $weather;
    }

    public function addVehicle(Vehicle $vehicle) : void  
    {
        $this->vehicles[] = $vehicle;
    }

    public function run() : void
    {
        $this->displayInfo();
        foreach(range(1,$this->maxTours) as $tour ) 
        {
            $this->displayTourInfo($tour);
            $this->tour($tour);
        }

        $this->displayWinners();
    }


    private function displayWinners() : void
    {
        $winners = $this->getWinners();

        sprintf('\nWINNERS');
        foreach( $winners as $category => $winner)
        {
            echo sprintf("\nCategory %s (%s) - %d", $category, $winner->getName(),$winner->getDistance());
        }
    }

    private function getWinners() : array
    {
        $winners = [];

        foreach($this->vehicles as $vehicle )
        {
            
            $category = $vehicle->gettype();
            if($this->isWinner($winners,$vehicle))
            {
                $winners[$category] = $vehicle;
            }

        }
  
        return $winners;
    }

    private function isWinner($winners,$vehicle) : bool
    {
        $category = $vehicle->gettype();
        if(!isset($winners[$category]))
        {
            return true;
        } 
        else 
        {
            if($vehicle->getDistance() > $winners[$category]->getDistance() )
            {
                return true;
            }
        }
        return false;
    }

    private function tour(int $tour) : void
    {
        $this->weather->randomiseWeather();
        $this->displayTourInfo($tour);
        foreach($this->vehicles as $vehicle)
        {
            $vehicle->move();
        }
    }

    private function displayInfo() : void 
    {
        echo sprintf("\n Distance: \t %s :", $this->distance);
        echo sprintf("\n Vehicles: \t %s ", count($this->vehicles));
    }

    private function displayTourInfo( int $tour)
    {
        echo sprintf("\n Tour %s began: ",$tour);
        echo sprintf("\n Pogoda: %s \n",$this->weather);
    }

}
