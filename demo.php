<?php

include_once 'phpdot.php';

class Person extends PhpDot
{
    public $name = "eissa",
            $age = 25;

    function __construct()
    {
        parent::__construct();
    }

}


$person = new Person;


echo $person.name; // eissa
echo "<br>";
echo $person.age; // 25
