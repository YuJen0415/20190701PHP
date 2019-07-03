<?php
    include_once 'ronurlis.php';

    $twid = createTWId();
    echo $twid;

    if (isTWId($twid)) {
        echo "OK";
    } else {
        echo "XX";
    }

    ?>