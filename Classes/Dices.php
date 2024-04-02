<?php

namespace Classes;

class Dices {
    public Dice $dice_1;
    public Dice $dice_2;
    public int $result;

    public function __construct()
    {
        $this->dice_1 = new Dice();
        $this->dice_2 = new Dice();
    }

    public function roll(): int
    {
        $result = 0;
        $result += $this->dice_1->roll();
        $result += $this->dice_2->roll();
        return $this->result;
    }

    public function isDouble(): bool
    {
        return $this->dice_1->value == $this->dice_2->value;
    }
}