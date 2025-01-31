<?php

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function testAddition()
    {
        $this->assertEquals(4, 2 + 2);
    }

    public function testSubtraction()
    {
        $this->assertEquals(0, 2 - 2);
    }
}
