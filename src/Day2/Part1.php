<?php

namespace AdventOfCode2021\Day2;

use AdventOfCode2021\Base;

class Part1 extends Base
{
    protected $position = [
        "x" => 0,
        "y" => 0
    ];

    public function run()
    {
        foreach ($this->_data as $datum) {
            preg_match("/(forward|up|down) \d+/", $datum, $matches);
            switch ($matches[1]) {
                case "forward" :
                    $this->position["x"] += substr($matches[0], strlen($matches[1]), strlen($matches[0]));
                    break;
                case "down":
                    $this->position["y"] += substr($matches[0], strlen($matches[1]), strlen($matches[0]));
                    break;
                case "up":
                    $this->position["y"] -= substr($matches[0], strlen($matches[1]), strlen($matches[0]));
                    break;
            }
        }
        return $this->position["x"] * $this->position["y"];
    }
}
