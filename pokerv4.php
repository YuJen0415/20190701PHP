<?php
$poker = range(0, 51);
shuffle($poker);

echo '<hr>';

$players = [[], [], [], []];

foreach ($poker as $i => $card) {
    $players[$i % 4][(int) $i / 4] = $card;
}

?>

<table border="1" width="100%">
    <?php
    $suits = ['&spades;', '<font color="red">&diams;', '&clubs;', '<font color="red">&hearts;'];
    $nums = ['A', 2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K'];
    for ($i = 0; $i < 4; $i++) {
        sort($players[$i]);
        echo "<tr>";
        foreach ($players[$i] as $card) {
            echo "<td>";
            echo $suits[(int)($card/13)];
            echo $nums[$card%13];
            echo "</td>";
        }
        echo "</tr>";
    }
    ?>

</table>