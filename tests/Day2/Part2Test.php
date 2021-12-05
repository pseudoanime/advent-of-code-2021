<?php

namespace Tests\Day2;

use AdventOfCode2021\Day2\Part2;
use PHPUnit\Framework\TestCase;

class Part2Test extends TestCase
{

    public function testRun()
    {
        $data = "forward 5
down 5
forward 8
up 3
down 8
forward 2";
        $data = file_get_contents(__DIR__ . "/input.txt");
        $obj = new Part2($data);
        $this->assertEquals(900, $obj->run());
    }
}
