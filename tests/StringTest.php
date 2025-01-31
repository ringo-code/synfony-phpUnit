<?php

use PHPUnit\Framework\TestCase;

class StringTest extends TestCase
{
    public function testStringContains()
    {
        $this->assertStringContainsString('world', 'Hello, world!');
    }

    public function testStringLength()
    {
        $this->assertEquals(5, strlen('Hello'));
    }
}
