<?php

$img = imagecreatefromjpeg("img/star.jpg");
$word = $_GET['word'];
$ary = str_split($word);
$x = 20;
foreach($ary as $w) {
    $color = imagecolorallocate($img, rand(0,255), rand(0,255), rand(0,255));
    imagettftext($img, 40, rand(-30,30), $x, rand(50,70), $color, 
    "C:/xampp/htdocs/fonts/myfont.otf", $w);

    $x = $x + 50;
}

header("content-type: image/jpeg");

imagejpeg($img);

imagedestroy($img);
