<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }
    
    public function test_final_string_is_equals():void
    {
        $text = 'Olha o gol';
        $this->assertStringEndsWith('gol', $text);
    }

    public function test_if_values_are_not_the_same():void
    {
        $text = 'Olha o gol';
        $anothertext = 'Messi';
        $this->assertNotSame($text, $anothertext);
    }
}
