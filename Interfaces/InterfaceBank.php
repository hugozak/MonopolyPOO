<?php

namespace Interfaces;

interface InterfaceBank
{
    public function cashout(int $amount): bool;
    public function cashin(int $amount): bool;
    public function giveHouse();
    public function takeHouse();
    public function giveHotel();
    public function takeHotel();
}