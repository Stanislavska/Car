<?php

include_once('Car.php');

$myCar = new Car("Ford", "Fiesta", "rainbow", 5);
$otherCar = new Car("Honda", "Civic", "grey", 4);

echo $myCar->helloCar();
echo $otherCar->helloCar();

echo $otherCar->getColor()."\n";
$otherCar->setColor("blue");
echo $otherCar->getColor()."\n";

echo $myCar->helloCar();
echo $otherCar->helloCar();


public function inteoduceCar(Car $c){
		return "Hello! This is me  - your car: ".$c->color." ".$c->brand." ".$c->model."\n";
}


?>