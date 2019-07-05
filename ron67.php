<?php
spl_autoload_register(function($class_name){
    require_once "{$class_name}.php";
});
include_once 'sql.php';

$myquery = new MyQuery($mysqli);
$var1 = $myquery->getField(1, MyQuery::QUERY_PNAME);

echo $var1;