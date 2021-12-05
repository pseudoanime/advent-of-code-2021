<?php

namespace AdventOfCode2021\Day1;

use PHPUnit\Framework\TestCase;

class Part2Test extends TestCase
{

    public function testRun()
    {
        $data = file_get_contents(__DIR__ . "/input.txt");
        /*$data = "607
618
618
617
647
716
769
792";*/
        $obj = new Part2($data);
        $this->assertEquals(5, $obj->run());
    }
}
