<?php
$mydir = '.';

$fp = @fopen('./dir1/file1.txt', 'r');

while ($c = fgetc($fp)) {
    echo nl2br($c);
}

fclose($fp);