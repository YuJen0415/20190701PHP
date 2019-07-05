<?php
session_start();

if (!isset($_SESSION['var1'])) header('location:ron54.php');

$var1 = $_SESSION['var1'];

echo $var1;