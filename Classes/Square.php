<?php

namespace Classes;

use Interfaces\InterfaceSquare;

class Square implements InterfaceSquare {

    private Property $property;

    public function getProperty()
    {
        return $this->property;
    }

    public function setProperty($property)
    {
        $this->property = $property;
        return $this;
    }
}