<?php
function _for($init_val, $condition, $increment, $callback)
{
    $limit = 3000;
    ini_set('xdebug.max_nesting_level', $limit);

    if(isset($GLOBALS['_forindexbegin']))
    {
        $init_val = eval("\$init_val $increment; return  \$init_val $increment;"); // for both ways : ++ and +1
        $GLOBALS['_forindexbegin'] ++;
    }
    else
    {
        $GLOBALS['_forindexbegin'] = 1;
    }

    $continue = eval("return \$init_val $condition;");

    if($continue && $GLOBALS['_forindexbegin'] < $limit)
    {
        $parameters = [$init_val];
        $parameters = array_merge($parameters, array_slice(func_get_args(), 4));
        call_user_func_array($callback, $parameters);
        $args = func_get_args();
        $args[0] = $init_val;
        call_user_func_array('_for', $args);
    }
    unset($GLOBALS['_forindexbegin']);
}