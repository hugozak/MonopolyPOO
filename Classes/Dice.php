<?php 

namespace Classes;

use Interfaces\InterfaceDice;

class Dice implements InterfaceDice 
{
    public int $value;
    public int $nb_face;

    public function __construct($nb_face = 6)
    {
        $this->nb_face = $nb_face;
    }

    public function roll(): int
    {
        $this->value = random_int(1, $this->nb_face);
        return $this->value;
    }
}

