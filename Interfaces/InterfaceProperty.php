<?php

namespace Interfaces;

use Classes\Player;

interface InterfaceProperty{
    public function checkOwner(): ?Player;
    public function hasHouse(): bool;
    public function hasHotel(): bool;
}