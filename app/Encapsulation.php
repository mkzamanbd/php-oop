<?php

namespace App;

class Encapsulation
{
    /**
     * @var $name
     * @var $age
     * @var $salary
     */
    public string $name;
    public string $age;
    private int $salary;

    /**
     * @param $name
     * @param $age
     */
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * @param $amount
     * @return void
     */
    public function setSalary($amount)
    {
        $this->salary = $amount;
    }

    /**
     * @return void
     */
    public function getSalary()
    {
        if ($this->salary > 0) {
            echo "Name: " . $this->name . "<br> Age: " . $this->age . "<br> Salary: " . $this->salary;
        } else {
            echo "Insufficient Balance!";
        }
    }
}