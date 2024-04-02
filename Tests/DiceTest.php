<?php

namespace Tests;

use Classes\Dice;
use PHPUnit\Framework\TestCase;

final class DiceTest extends TestCase {

    public function testNumberOfFaces(): void
    {
        $dice = new Dice();
        $this->assertSame($dice->nb_face, 6);
    }

}