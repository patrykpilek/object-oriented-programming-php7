<?php

class Test
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

	public function __toString(): string
	{
		return "My Name is " . $this->name;
	}

}

$obj = new Test('Tim');
echo $obj;
