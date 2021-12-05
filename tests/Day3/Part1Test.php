<?php

namespace Tests\Day3;

use AdventOfCode2021\Day3\Part1;
use PHPUnit\Framework\TestCase;

class Part1Test extends TestCase
{
    public function testRun()
    {
        $data = "00100
11110
10110
10111
10101
01111
00111
11100
10000
11001
00010
01010";
        $data = file_get_contents(__DIR__ . "/input.txt");
        $obj = new Part1($data);
        $this->assertEquals(198, $obj->run());
    }
}
