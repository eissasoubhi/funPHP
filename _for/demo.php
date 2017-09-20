<?php
include_once '_for.php';

$hello = 'hello world';

_for(0, '<=10', '++', function ($i, $hello)
{
    var_dump($hello . ' ' . $i);
}, $hello);

// in backward

$hello = 'bonjour le monde';

_for(30, '>=10', '-2', function ($i, $hello)
{
    var_dump($hello . ' ' . $i);
}, $hello);
