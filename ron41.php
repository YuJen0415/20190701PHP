<?php
if(!isset($_REQUEST['filename'])) die('get out here');

$filename = $_REQUEST['filename'];
$content = $_REQUEST['content'];
$fp = @fopen("./dir1/{$filename}", 'w');
if (@fwrite($fp, $content)) {
    header("Location: dir1/{$filename}");
} else {
    echo 'write ERROR';
}

fclose($fp);