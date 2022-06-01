<?php

namespace App;

abstract class Car
{
    /**
     * @var $name
     */
    public $name;

    /**
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    abstract public function intro(): string;
}