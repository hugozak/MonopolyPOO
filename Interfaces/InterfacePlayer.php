<?php

namespace Interfaces;

use Classes\Property;

interface InterfacePlayer {
    public function play();
    public function move(int $number);
    public function drawCard();
    public function buy(int $amount, Property $property);
    public function sell(int $amount);
    public function payRent(int $amount);
    public function buyHouse(int $amount);
    public function sellHouse(int $amount);
    public function buyHotel(int $amount);
    public function sellHotel(int $amount);
    public function checkBankruptcy(): bool;
    public function checkJail(): bool;
    public function endTurn();
}