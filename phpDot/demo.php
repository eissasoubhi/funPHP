<?php

include_once 'phpdot.php';

class Person extends PhpDot
{
    public $name = "eissa",
            $age = 25;

}


$person = new Person;

echo $person.name; // eissa
echo "<br>";
echo $person.age; // 25

echo "<br> or <br>";

echo $person.$name; // eissa
echo "<br>";
echo $person.$age; // 25
