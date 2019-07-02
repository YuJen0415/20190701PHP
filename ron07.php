<?php
$result1 = $result2 = $result = $x = $y = '';
if (isset($_GET['x'])) {
    $x = $_GET['x'];
    $y = $_GET['y'];
    $result1 = (int)($x / $y);
    $result2 = $x % $y;
    $result = $result1 . "..." . $result2;
    // echo $x . " + " . $y . " = " . ($x + $y);
}
?>
<form action="ron07.php">
    <input name="x" value="<?php echo $x; ?>">
    /
    <input name="y" value="<?php echo $y; ?>">
    <input type="submit" value="=">
    <?php
        // if(isset($result))
        echo $result;
    ?>
</form>

