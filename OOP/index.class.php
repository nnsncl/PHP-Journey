<?php

include "Vehicule.class.php";
include "Car.class.php";
include "Bike.class.php";


$b = new Bike('Kawasaki', 'ZX6R', '135');
$b->start();
echo '<br>';
$b->getHP();
echo '<br>';
$b->wheeling();

echo '<br><br>';

$c = new Car('Lada', '3000');
$c->start();
echo '<br>';
echo 'This car has '.Car::WHEELS_AMOUNT.' wheels'; // Access a const
