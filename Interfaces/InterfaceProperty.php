<?php

namespace Interfaces;

use Classes\Player;

interface InterfaceProperty{
    public function checkOwner(): ?Player;
    public function addHouse(int $houses);
    public function removeHouse();
    public function hasHouses(): int;
    public function addHotel();
    public function removeHotel();
    public function hasHotel(): bool;
}