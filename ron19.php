<?php
$a = [];
var_dump($a);
$a[] = 1;
$a[] = 2;
$a[] = 'Bryan';
$a[] = true;
var_dump($a);
echo count($a). "<br>";

$a[10] = 12; $a[1] = 'brad';
var_dump($a);