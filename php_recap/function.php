<?php

function sayName($name="Gaess")
{
    echo "Hello ".$name.PHP_EOL;
}

sayName();
sayName("Miftah");

call_user_func('sayName','Jond Doe');

call_user_func_array('sayName',['Jane Doe']);

// Anonymous Function( Closure )

$solidier=function($name){echo $name.PHP_EOL;};

$solidier('Captain Price');

// $result = fn($x)=>$x*2;

// echo $result(19);

// function Returning Value

function getlastName($name)
{
    $real_name=explode(" ",$name);
    $getlast=count($real_name)-1;
    if($real_name[$getlast]!="doe")
    {
        return "you not doe family";
    }
    return $real_name[$getlast].PHP_EOL;
}
echo getlastName("Jane Doe Zuckernberg");