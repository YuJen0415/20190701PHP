<?php

$img = imagecreatefromjpeg("img/coffee.jpg");

$yellow = imagecolorallocate($img, 255, 255, 0);
imagettftext($img, 36, rand(-30,30), 100, 100, $yellow, 
"C:/xampp/htdocs/fonts/myfont.otf", "Hello Bryan");

header("content-type: image/jpeg");

imagejpeg($img);

imagedestroy($img);
