<?php

class Student
{
    public $name;
    private $id;
    public static $stuCount = 12;

    public function __construct($name, $id)
    {
        self::$stuCount += 1;
        $this->name = $name;
        $this->id = $id;
    }

    public static function someStaticMethod()
    {
        echo self::$stuCount;

        echo "Static Method.";
    }

}

echo Student::someStaticMethod();