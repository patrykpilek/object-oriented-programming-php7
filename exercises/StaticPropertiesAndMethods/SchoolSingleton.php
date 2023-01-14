<?php

/**
 * The Singleton Pattern
 * In this coding exercise you are going to practice Static keyword, self keyword, Constructor and singleton pattern.
 * This coding exercise is little bit tricky. Because I  haven't discussed singleton pattern in this course. So, I thought why don't you learn it from a coding exercise.
 * --------------------------------------------------------
 * First of all a little discussion on singleton pattern
 * Singleton Pattern: This is one of the simplest design patterns which is used to create only one object of a class for the entire life cycle of an Application. This pattern makes sure that another object of the class is never been created. If a code tries to create another object it will get the same object that was created before. In short "One And Only One Object". This pattern also provides a way to access its only object, which can be accessed without creating the object of that class.
 * Lets get started.
 * To make a class singleton, you have to do the following tasks.
 * The constructor of the class is declared as private. So, the code outside of the class can not make an object of that class using new operator. Only the code that is inside the class can create its object.
 * Define a static method getInstance(). This method will create an object of the class and it will make sure that only single object gets created.
 * Define a private static property $singleInstance. It will be used to hold that single object of the singleton class. So, getInstance() method first checks this property for the object. If object exists it return that object and if the object doesn't exists it creates a new object, save it in this property and also return that object to the user.
 * That was all about Singleton Class.
 * --------------------------------------------
 * Coding Exercise
 * In this exercise we will create a school singleton class.
 * This is an school application. You have to create a school class and you wanted to make sure that there is one and only one instance of that class in the entire application.
 * Follow the instructions bellow to write SchoolSingleton class.
 * Note: Use exact same names for class, methods or variables as i will suggest, because i have written a testing code based on these names.
 * 1: Define a class SchoolSingleton.
 * 2: Define a private static property $schoolName. This property will be used to save school name.
 * 3: Define a private static property $schoolAdd. This property will be used to save school address.
 * 4: Define a private static property $singleInstance. This property will be used to save our SchoolSingleton Object.
 * 5: Define a private constructor __construct($name, $add) . It must take two parameters $name, $add. It should save these parameters values to $schoolName and  $schoolAdd properties respectively. These two properties are static so you have to access them using self keyword. self::$schoolName = $name; .
 * 6: Define a public static method getInstance($name, $add) . This method should take two parameters $name and $add. This method is responsible for creating a singleton object. This method checks that $singleInstance property contains SchoolSingleton Object or not, if it doesn't contain the object then it creates an object of SchoolSingleton class, save it in  $singleInstance property and return this newly created object and if it already contains the SchoolSingleton object then just return this object.
 * in if condition. You can check it using instanceof keyword. instanceof operator will check that $singleInstance is an instance of  SchoolSingleton class or not. if(!(self::$singleInstance instanceof self))
 * here you have to use self keyword to refer the SchoolSingleton class because you are in static method, here you cant use $this keyword.
 * if this if condition is true then create a new SchoolSingleton object using a new keyword. Again you are inside the class's static method so use self keyword to create class object. constructor needs two arguments so pass getInstance() $name and $add arguments to the constructor.
 *
 * new self($name, $add);
 *
 * Assign this object to $singleInstance property.
 *
 * 7: Outside this if condition just return $singleInstance property.
 *
 * It means if object doesn't exist then if block will create it and if it exists then if block will not be executed. But in both conditions $singleInstance property will be returned to the user at the end of the method.
 *
 * 8: Define public static method getSchoolName() . It shouldn't take any parameters. It should only return return self::$schoolName; .
 *
 * 9: Define public static method getSchoolAdd() . It shouldn't take any parameters. It should only return return self::$schoolAdd; .
 *
 * 10: Define private method __clone(). This is a magic method and it is automatically called when someone tries to create a clone of an object using php clone keyword.
 *
 * $newObject = clone $existingObject;
 *
 * This is another way of creating an exact copy of an object. This default behavior can be changed by defining __clone() magic method in your class. You don't have to do anything in this method. This method will be empty. So, If someone tries to create a clone of our singleton, nothing will happen.
 *
 * I have discussed object cloning in Section 18.
 *
 * SchoolSingleton class is complete.
 *
 * ----------------------------------------------------------------
 * 11: Call getInstance() static method and pass it school name and school address as arguments .
 * 12: Call getSchoolName() and getSchoolAdd() methods and print the result using echo.
 * 13: Then again call getInstance() static method and pass it another school name and another school address as arguments .
 * 14: Then again call getSchoolName() and getSchoolAdd() methods to check our singleton has created another object or not . you should get first school name and school address both times .
 *
 * -----------------------------------------------------------------
 */
class SchoolSingleton
{
    private static $schoolName;
    private static $schoolAdd;
    private static $singleInstance;

    private function __construct($name, $add)
    {
        self::$schoolName = $name;
        self::$schoolAdd = $add;
    }

    public static function getInstance($name, $add)
    {
        if (!(self::$singleInstance instanceof self)) {
            self::$singleInstance = new self($name, $add);
        }

        return self::$singleInstance;
    }

    public static function getSchoolName()
    {
        return self::$schoolName;
    }

    public static function getSchoolAdd()
    {
        return self::$schoolAdd;
    }


    private function __clone()
    {

    }

}

SchoolSingleton::getInstance("High School", "No 2 abc city");
echo SchoolSingleton::getSchoolName();
echo SchoolSingleton::getSchoolAdd();
SchoolSingleton::getInstance("fff", "fff");
echo SchoolSingleton::getSchoolName();
echo SchoolSingleton::getSchoolAdd();