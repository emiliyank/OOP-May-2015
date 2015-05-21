<?php
interface iLandVehicle{
	public function moveForward();
	public function makeTurn($direction);
}

interface iGas{
	public function fill($type, $quantity);
}

class Car implements iLandVehicle, iGas{
	public $model;
	public $maxSpeed;
	public $coupe;

	public function moveForward(){
		echo "The car moves forward.";
	}

	public function makeTurn($direction){
		echo "The car makes turn to $direction<br/>";
	}

	public function fill($type, $q){
		echo "The car was filled with $q $type <br/>";
	}
}

class Motorbike implements iLandVehicle{
	public $model;
	public $maxSpeed;

	public function moveForward(){
		echo "The motorbike moves forward really quick.";
	}

	public function makeTurn($direction){
		echo "The motorbike makes turn to $direction <br/>";
	}
}


$golf = new Car();
$golf->moveForward();
$golf->makeTurn('left');
$golf->fill('gass', 5);
?>