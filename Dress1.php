<?php

class Dress
{
    public $color = "red";  // The color of the dress
    public $fabric = "linen"; // The fabric of the dress
    public $design = "Slim Fit Blazer";//The design of the dress

}

$dressObj = new Dress();
$dressObj->color = "Black";

var_dump($dressObj);
echo "</br></br>";
print_r($dressObj);




