<?php

class Dress
{
    public $color = "red";  // The color of the dress
    public $fabric = "linen"; // The fabric of the dress
    public $design = "Slim Fit Blazer";//The design of the dress

    public function displayInfo()
    {
        echo "The info about the dress.";
        echo $this->color;
        echo $this->fabric;
        echo $this->design;
    }

    public function helloWorld($number1, $number2)
    {
        if(is_numeric($number1, )) {

        }
        return $number1 + $number2;
    }
}

$dressObj = new Dress();
echo $dressObj->helloWorld(20, 30);



