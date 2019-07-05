<?php
$passwd = '123456';
$passwd1 = password_hash($passwd, PASSWORD_DEFAULT);

echo $passwd1. '<br>';
echo strlen($passwd1);