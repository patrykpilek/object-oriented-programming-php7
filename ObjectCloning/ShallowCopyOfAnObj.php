<?php

class Charger
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function charging()
    {
        echo "Charger name " . $this->name . " Charging........";
    }
}

class ToyCar
{
    public $carName;
    public $colour;
    public $chargerObj;

    public function __construct($name, $colour, $charger)
    {
        $this->carName = $name;
        $this->colour = $colour;
        $this->chargerObj = $charger;
    }

}

$charObj = new Charger("6 Volt Charger.");
$carObj = new ToyCar("Car 1", "Black", $charObj);

$otherCarObj = clone $carObj;

$otherCarObj->carName = "Car 2";
$otherCarObj->chargerObj->name = "12 Volt Charger";

print_r($carObj);

echo "</br></br>";

print_r($otherCarObj);
