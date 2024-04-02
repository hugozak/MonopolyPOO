<?php

namespace Interfaces;

use Classes\Player;

interface InterfaceSquare{
    public function checkOwner(): ?Player;
}