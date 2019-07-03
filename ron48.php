<?php

$rate = $_GET['rate']; // 50%

$img = imagecreatetruecolor(400,20);
$yellow = imagecolorallocate($img, 255, 255, 0);

$red = imagecolorallocate($img, 255, 0, 0);
imagefilledrectangle($img, 0, 0, 400, 20, $yellow);
imagefilledrectangle($img, 0, 0, $rate * 400 /100, 20, $red);

header("Content-type: image/jpeg");

imagejpeg($img);

imagedestroy($img);
