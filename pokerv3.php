<?php
$poker = [];

for ($i = 0; $i < 52; $i++) {
    $poker[$i] = $i;
}
    $i=51;
    do {
        $change = rand(0,$i-1);
        [$poker[$i],$poker[$change]] = [$poker[$change],$poker[$i]];
        $i--;
    } while ($i > 1);

    foreach ($poker as $value) {
        echo $value . '<br>';
    }
    

