<?php

class Vehicule {

    // Attributes inheritance
    protected $brand;
    protected $model;
    protected $color;

    public function start()
    {
        echo $this->brand." ". $this->model."'s starting.";
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