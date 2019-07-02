<form action="ron17.php">
    1+2+...+
    <input type="number" name="n" value="<?php if (isset($_GET['n'])) echo $_GET['n'] ?>">
    <input type="submit" value="=">
    <?php

    if (isset($_GET['n'])) {
        $n = $_GET['n'];
        $sum = 0;
        $i = 0;
        while ($i <= (int) $n) {
            $sum += $i;
            $i++;
        }

        echo $sum;
    }
    ?>
</form>