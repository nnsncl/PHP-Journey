<?php

class Car
{
    // Attributes
    private $doorAmount = 3;
    private $brand;
    private $model;
    private $color = 'Black';

    // Methods
    public function start()
    {
        echo "Car's starting";
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }
}


$car = new Car;

$car->start();
echo '<br>';
echo $car->getColor();
echo $car->setColor('Grey');
echo '<br>';
echo $car->getColor();
echo '<br>';
