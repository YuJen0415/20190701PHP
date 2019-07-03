<?php
$p = array(1=>0,0,0,0,0,0);

for ($i = 0;$i<100;$i++) {
    $point = rand(1,6);
    $p[$point]++;
}

for ($i=1;$i<=6;$i++) {
    echo "{$i}骰出{$p[$i]}次<br>";
}