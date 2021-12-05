<?php

namespace AdventOfCode2021\Day3;

class Part1 extends \AdventOfCode2021\Base
{
    protected array $bitsPowerArray = [];

    public function run()
    {
        foreach ($this->_data as $datum) {
            $bits = str_split($datum);
            foreach ($bits as $key => $bit) {
                if (array_key_exists($key, $this->bitsPowerArray) == false
                    || array_key_exists(
                           $bit,
                           $this->bitsPowerArray[$key]
                       ) == false) {
                    $this->bitsPowerArray[$key][$bit] = 0;
                }
                $this->bitsPowerArray[$key][$bit]++;
            }
        }
        return $this->getGamma() * $this->getEpsilon();
    }

    private function getGamma()
    {
        $gamma="";
        foreach ($this->bitsPowerArray as $item) {
            $gamma.= $item[0]>$item[1] ? "0" : "1";
        }
        return bindec($gamma);
    }

    private function getEpsilon()
    {
        $epsilon="";
        foreach ($this->bitsPowerArray as $item) {
            $epsilon.= $item[0]<$item[1] ? "0" : "1";
        }
        return bindec($epsilon);
    }
}
