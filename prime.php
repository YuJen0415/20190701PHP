<table border="1" width="100%">

<?php

$num = 100;
$pstr[0] = 1;   // 質數
$count = 1;
$pary[1] = 1;
$isPrime = false;

for ($i=2;$i<=$num;$i++) {
    for ($j = 2; $j * $j <= $i; $j++) {
        if($i%$j==0) {
            $isPrime = true;
            break;
        }
    }

    if ($isPrime) {
        $pary[$i] = 0;
        $isPrime = false;
    } else {
        // $pstr[$count] = $i;
        // $count++;
        $pary[$i] = 1;

    }
}


for ($r = 0;$r<10;$r++) {
    echo "<tr>";
    for($c = 0;$c<10;$c++) {
        if ($pary[$count] == 1) {
            echo "<td bgcolor='yellow'>";
        } else {
            echo "<td>";
        }

        echo $count;
        $count++;
        echo "</td>";
    }
    echo "</tr>";
}


?>

</table>