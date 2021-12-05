<?php

namespace AdventOfCode2021;

abstract class Base
{
    /**
     * @var array|false|string[]
     */
    protected $_data;

    public function __construct($data)
    {
        $this->_data = preg_split("/\n/", $data);
    }

    abstract public function run();
}
