<?php

namespace AdventOfCode2021\Day1;

use PHPUnit\Framework\TestCase;

class Part1Test extends TestCase
{
    public function testRun()
    {
        $a = phpinfo();
        $data = file_get_contents(__DIR__ . "/input.txt");
        $obj = new Part1($data);
        $this->assertEquals(7, $obj->run());
    }
}
