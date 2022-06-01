<?php

namespace App;

class Cat implements Animal
{
    /**
     * @return string
     */
    public function makeSound(): string
    {
        return "Meow ";
    }
}