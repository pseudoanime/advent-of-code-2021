<?php

namespace AdventOfCode2021\Day2;

use AdventOfCode2021\Base;

class Part2 extends Base
{
    protected $position = [
        "x" => 0,
        "y" => 0,
        "aim" => 0
    ];

    public function run()
    {
        foreach ($this->_data as $datum) {
            preg_match("/(forward|up|down) \d+/", $datum, $matches);
            $unit = substr($matches[0], strlen($matches[1]), strlen($matches[0]));
            switch ($matches[1]) {
                case "forward" :
                    $this->position["x"] += $unit;
                    $this->position["y"] += $unit * $this->position["aim"];
                    break;
                case "down":
                    $this->position["aim"] += $unit;
                    break;
                case "up":
                    $this->position["aim"] -= $unit;
                    break;
            }
        }
        return $this->position["x"] * $this->position["y"];
    }
}
