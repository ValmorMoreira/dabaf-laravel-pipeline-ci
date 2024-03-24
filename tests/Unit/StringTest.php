<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class StringTest extends TestCase
{
    /**
     * A basic strings test example.
     */    
    public function test_final_string_is_equals():void
    {
        $text = 'Olha o gol';
        $this->assertStringEndsWith('gol', $text);
    }

    public function test_if_strings_are_not_the_same():void
    {
        $text = 'Olha o gol';
        $anothertext = 'Messi';
        $this->assertNotSame($text, $anothertext);
    }

    public function test_if_strings_are_the_same():void
    {
        $textuppercase = 'UTFPR';
        $textlowercase = 'utfpr';
        $this->assertEqualsIgnoringCase($textlowercase, $textuppercase);
    }
}
