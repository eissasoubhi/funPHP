# _for
custom for loop, made from scratch
# What's the idea ?
make a loop without using php predefined loop statements
# Example :
```php

include_once '_for.php';

$hello = 'hello world';

_for(0, '<=10', '++', function ($i, $hello)
{
    var_dump($hello . ' ' . $i);
}, $hello);
// 'hello world 0' (length=13)
// 'hello world 1' (length=13)
// .....
// 'hello world 10' (length=14)

// in backward

$hello = 'bonjour le monde';

_for(30, '>=10', '-2', function ($i, $hello)
{
    var_dump($hello . ' ' . $i);
}, $hello);
// 'bonjour le monde 30' (length=19)
// ......
// 'bonjour le monde 10' (length=19)

```



