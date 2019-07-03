<?php

$fp = @fopen('./dir1/file2.txt', 'r+');
fwrite($fp, 'Hello Bryan\n123\nidiot');
fflush($fp);
fclose($fp);