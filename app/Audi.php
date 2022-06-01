<?php

namespace App;

class Audi extends Car
{

    /**
     * @return string
     */
    public function intro(): string
    {
        return "This is $this->name";
    }

    /**
     * @return string
     */
    public function getCarIntro(): string
    {
        return $this->intro();
    }
}