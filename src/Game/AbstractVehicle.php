<?php

namespace Ztach\Game;

abstract class AbstractVehicle implements Vehicle
{

    protected $make='';
    protected $model='';
    protected $speed;
    protected $distance = 0;

    public function __construct(string $make, string $model, Speed $speed)
    {
        $this->make = $make;
        $this->model = $model;
        $this->speed = $speed;
    }


    public function move() : void
    {
        $this->distanceMove();
         
        echo sprintf("\n zapiepsza {{$this->getName()}}: %s \n z prędkością %d %s\n i przemierzyłem dystans: %s kilosów\n", $this->model, $this->speed->getValue(),  $this->speed->getType(), $this->distance );
    }


    protected function distanceMove() : void {}

    abstract protected function getName() : string;


}