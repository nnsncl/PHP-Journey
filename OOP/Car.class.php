<?php

class Car extends Vehicule
{
    // Attributes
    const WHEELS_AMOUNT = 4;
    // private $brand;
    // private $model;
    // private $color = 'Black';

    // Methods
    public function __construct(string $brand, string $model)
    {
        $this->brand = $brand;
        $this->model = $model;
    }
}

// $c = new Car('Lada', 'LadaOne');
// $c->start();

// echo '<br>';

// $c2 = new Car('Blyat mobile', 'Lada');
// $c2->start();