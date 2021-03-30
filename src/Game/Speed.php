<?php

namespace Ztach\Game;

class Speed {

    const MILES = 'mph';
    const KILOMETERS = 'km/h';


    protected $value = 10.0;
    protected $type = self::KILOMETERS;
    protected $validTypes = [
            self::KILOMETERS, 
            self::MILES
    ];

    public function __construct(float $value, ?string $type = null)
    {
        if (in_array($type,$this->validTypes,true)) {
            $this->type = $type;
        }
        $this->value = $value;
    }

    public function getValue() : float
    {
        return $this->value  ;
    }

    public function getType() : string
    {
        return $this->type  ;
    }}