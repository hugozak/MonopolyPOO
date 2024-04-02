<?php 

namespace Classes;

use Interfaces\InterfaceDice;

class Dice implements InterfaceDice 
{
    private int $value;
    private int $nbFace;

    public function __construct($nbFace = 6){
        $this->nbFace = $nbFace;
    }

    public function roll(): int{
        $this->value = random_int(1, $this->nbFace);
        return $this->value;
    }

    public function getValue(){
        return $this->value;
    }

    public function setValue($value){
        $this->value = $value;
        return $this;
    }
}