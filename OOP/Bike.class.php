<?php

class Bike extends Vehicule{

    private $horsePower;

    public function __construct($brand, $model, $horsePower)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->horsePower = $horsePower;
    }

    public function wheeling()
    {
       echo 'Wheeling on a '.$this->model;
    }

    public function setHP($horsePower)
    {
       return $this->horsePower = $horsePower;
    }

    public function getHP()
    {
       echo $this->model.'has '.$this->horsePower.' horse power.';
    }
}