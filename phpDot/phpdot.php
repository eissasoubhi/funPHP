<?php
class PhpDot
{

    function __construct()
    {
        $attributes = get_object_vars($this);

        foreach ($attributes as $key => $value)
        {
            $GLOBALS[$key] = $value;
            define($key, $value);
        }

    }

    public function __toString()
    {
        return "";
    }

}
