<?php
spl_autoload_register(function($class_name) {
    require_once "{$class_name}.php";
});

$obj1 = new MyClass1;
$obj1->showMe();

$obj2 = new MyClass2;
$obj2->showMe();