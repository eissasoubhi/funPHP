<?php
class PhpDot
{

    function __construct()
    {
        $attributes = get_object_vars($this);

        foreach ($attributes as $key => $value)
        {
            $GLOBALS[$key] = $value; // make the attribute available in the global context so it can be called with $[attribute name]
            define($key, $value); // define the attribute as CONSTANT to be called directy with its name
        }

    }

    public function __toString()
    {
        return "";
    }

}
