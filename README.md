# phpDot
php "dot" notation to get object attributes 
# What's this exactly ?
Nothing :) just trying to make somthing cool and nice with php 
# What's the idea ?
to use dot "." instead of "->" when working whith objects 
# Example :
```php

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
//or
echo $person.$name; // eissa

echo $person.age; // 25
// or
echo $person.$age; // 25
```
Cool isn't. Just try it ;)
