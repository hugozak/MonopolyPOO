<?php

namespace Classes;

use Interfaces\InterfaceProperty;

class Property implements InterfaceProperty{

    public $name;
    private $rent;
    private Player $owner;
    public $nbHouse;
    public bool $hotel;

    public function setOwner($player) {
        if($player != null){
            $this->owner = $player;
        }
    }

    public function removeOwner() {
        $this->owner = null;
    }
    
    public function checkOwner(): ?Player{
        if ($this->owner != null) {
            return $this->owner;
        }
        return null;
    }

    public function addHouse(int $houses) {
        $this->nbHouse = $houses;
    }

    public function removeHouse() {
        $this->nbHouse = 0;
    }

    public function hasHouses(): int {
        if ($this->nbHouse != 0){
            return $this->nbHouse;
        }
        return 0;
    }

    public function addHotel() {
        $this->hotel = true;
    }

    public function removeHotel() {
        $this->hotel = false;
    }

    public function hasHotel(): bool {
        if ($this->hotel != 0){
            return $this->hotel;
        }
        return false;
    }

    public function getRent(){
        return $this->rent;
    }

    public function setRent($rent){
        $this->rent = $rent;
        return $this;
    }
}