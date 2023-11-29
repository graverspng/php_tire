<?php
include "Tire.php";
include "Car.php";
include "Train.php";


$tire = New Tire ("Tire1", "Tire2", "Tire3");
echo $tire->size." ".$tire->type." ";

$car1 = New Car("Audi", 50);
echo $car1::$describe;
Car::makeNoise();
echo "<br>";



$train2 = new Train("Otrais Vilciens ", 250);

$train1 = new Train(" Pirmais Vilciens ", 100);
Train::makeNoice();
