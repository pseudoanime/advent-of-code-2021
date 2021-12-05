<?php

namespace AdventOfCode2021\Day1;

use AdventOfCode2021\Base;

class Part2 extends Base
{
    public function run()
    {
        $count = 0;
        $sum = 0;
        for ($i = 1; $i < count($this->_data) - 2; $i++) {
            if ($this->_data[$i-1] + $this->_data[$i] + $this->_data[$i + 1] >= $sum) {
                $count++;
            }
            $sum = $this->_data[$i-1] + $this->_data[$i] + $this->_data[$i + 1];
        }
        return $count;
    }
}
