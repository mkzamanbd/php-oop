<?php

require_once realpath("vendor/autoload.php");

use App\Audi;
use App\Cat;

$audi = new Audi("Audi");
echo $audi->getCarIntro();
echo "<br>";

$cat = new Cat();
echo $cat->makeSound();
echo "<br>";

