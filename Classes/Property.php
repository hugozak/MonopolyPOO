<?php

namespace Classes;

use Interfaces\InterfaceProperty;

enum Type {
    case TrainStation;
    case Company;
    case Street;
}

class Property implements InterfaceProperty{

    public $name;
    private $rent;
    private Type $type;
    private $rentOneHouse;
    private $rentTwoHouses;
    private $rentThreeHouses;
    private $rentFourHouses;
    private $rentHotel;
    private $price;
    private $hotelPrice;
    private $housePrice;
    private Player $owner;
    private $nbHouse = 0;
    private bool $hotel = false;

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

    public function getOwner(){
        return $this->owner;
    }

    public function getRent(){
        return $this->rent;
    }

    public function setRent($rent){
        $this->rent = $rent;
        return $this;
    }

    public function getNbHouse(){
        return $this->nbHouse;
    }

    public function setNbHouse($nbHouse){
        $this->nbHouse = $nbHouse;
        return $this;
    }

    public function getHotel(){
        return $this->hotel;
    }

    public function setHotel($hotel){
        $this->hotel = $hotel;
        return $this;
    }
}