<?php

use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    public function testHelloWorld()
    {
        $this->assertEquals('Hello, World!', $this->helloWorld());
    }

    public function testHelloWorldWithDifferentString()
    {
        $this->assertNotEquals('Goodbye, World!', $this->helloWorld());
    }

    private function helloWorld()
    {
        return 'Hello, World!';
    }
}
