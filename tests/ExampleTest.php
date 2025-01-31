<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testTrue()
    {
        $this->assertTrue(true);
    }

    public function testFalse()
    {
        $this->assertFalse(false);
    }

    public function testNull()
    {
        $this->assertNull(null);
    }

    public function testArrayHasKey()
    {
        $array = ['key' => 'value'];
        $this->assertArrayHasKey('key', $array);
    }

    public function testStringContains()
    {
        $this->assertStringContainsString('world', 'Hello, world!');
    }
}
