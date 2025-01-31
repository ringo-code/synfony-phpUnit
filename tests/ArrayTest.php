<?php

use PHPUnit\Framework\TestCase;

class ArrayTest extends TestCase
{
    public function testArrayHasKey()
    {
        $array = ['key' => 'value'];
        $this->assertArrayHasKey('key', $array);
    }

    public function testArrayCount()
    {
        $array = [1, 2, 3];
        $this->assertCount(3, $array);
    }
}
