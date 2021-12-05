<?php
namespace AdventOfCode2021\Day1;

use AdventOfCode2021\Base;

class Part1 extends Base
{
    public function run()
    {
        $count = 0;
        for ($i = 1; $i < count($this->_data); $i++) {
            if ($this->_data[$i] > $this->_data[$i-1]) {
                $count++;
            }
        }
        echo $count;
        return $count;
    }
}
