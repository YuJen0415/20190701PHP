<?php

$year = rand(1920, 2200);
// $year = 2000;
echo $year . "是";

if ($year % 400 == 0) {
    echo "閏年";
} elseif ($year % 100 == 0) {
    echo "非閏年";
} elseif ($year % 4 == 0) {
    echo "閏年";
 } else {
    echo "非閏年";
}
