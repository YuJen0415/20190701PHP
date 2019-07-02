<?php

$var1 = 1; // $[a-zA-Z$_][a-zA-Z0-9$_]*

echo gettype($var1). "<br>";

$var1 = 'bryan';

echo gettype($var1). "<br>";

$var1 = true;

echo gettype($var1). "<br>";

$var1 = 12.3;

echo gettype($var1). "<br>";

$var5 = 012;   //16進位

echo $var5.'<br>';

$var6 = 0x12;   //16進位

echo $var6."<br>";

$var7 = 10;
$var8 = ++$var7;

echo "{$var7} : {$var8}<br>";