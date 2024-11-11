<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testBasicFunctionality()
    {
        $this->assertTrue(true);
    }

    public function testAddition()
    {
        $result = 2 + 2;
        $this->assertEquals(4, $result);
    }
}
