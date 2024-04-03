<?php

namespace Classes;

use Interfaces\InterfaceCard;

abstract class Card implements InterfaceCard {

    private String $description;

    public function getDescription(){
        return $this->description;
    }
}