<?php
$mydir = '.';
date_default_timezone_set('Asia/Taipei');
$fp = @opendir($mydir) or exit('sever Busy');

while($file = readdir($fp)) {
    $mtime = filemtime("{$mydir}/{$file}");
    $ntime = date('Y-m-d H:i:s', $mtime);
    echo "{$file} : {$ntime}<br>";
}


if (unlink("./test.html")) {
    echo "Ok";
}