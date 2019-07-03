<?php

sayHello('Bryan');
sayHellov3(array('brad', 'Bryan', 'BBByy', 'ttoo'));
function sayHello($name) {
    echo "Hello, {$name}<br>";
}

function sayHellov3($names) {
    foreach ($names as $value) {
        echo "Hello, {$value}<br>";
    }
}