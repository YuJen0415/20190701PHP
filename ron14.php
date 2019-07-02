<?php
$i = 0;
for (printBryan(); $i < 10; printLine()) {
    echo "{$i}<br>";
    $i++;
}

function printBryan() {
    echo 'Bryan<br>';
}

function printLine() {
    echo '<hr>';
}