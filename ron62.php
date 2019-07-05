<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.youtube.com/watch?v=2nQj48Q7nvs");

curl_setopt($ch, CURLOPT_HEADER, 0);

$ret = curl_exec($ch);
curl_close($ch);
