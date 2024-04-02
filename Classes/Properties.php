<?php

namespace Classes;

use Interfaces\InterfaceProperty;

class Properties implements InterfaceProperty{

    public $name;
    public $rent;
    
    public function checkOwner(): ?Player{
       return null;
    }

    public function hasHouse(): bool {
        return false;
    }

    public function hasHotel(): bool {
        return false;
    }
}