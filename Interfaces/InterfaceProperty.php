<?php

namespace Interfaces;

use Classes\Player;

interface InterfaceProperty{
    public function setOwner($player);
    public function removeOwner();
    public function checkOwner(): ?Player;
}