<?php

namespace Ztach\Game;
 
interface Vehicle
{
    public function move() : void ;

    public function getDistance() : float;

    public function getType() : string;

    public function getName() : string;
}