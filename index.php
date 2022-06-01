<?php

require_once realpath("vendor/autoload.php");

use App\Audi;
use App\Cat;
use App\Encapsulation;

$audi = new Audi("Audi");
echo $audi->getCarIntro();
echo "<br>";

$cat = new Cat();
echo $cat->makeSound();
echo "<br>Encapsulation <br>";

$encapsulation = new Encapsulation("Kamruzzaman", 25);
$encapsulation->setSalary(35000);
$encapsulation->getSalary();
echo "<br>";

