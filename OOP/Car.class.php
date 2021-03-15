<?php

class Car
{
    // Attributes
    public $doorAmount = 3;
    public $brand;
    public $model;
    public $color = 'Black';

    // Methods
    public function start()
    {
        echo "Car's starting";
    }
}


$car = new Car;
$car->start();