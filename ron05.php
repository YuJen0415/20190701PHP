<?php
$result = $x = $y = '';
if (isset($_GET['x'])) {
    $x = $_GET['x'];
    $y = $_GET['y'];
    $result = $x + $y;
    // echo $x . " + " . $y . " = " . ($x + $y);
}
?>
<form action="ron05.php">
    <input name="x" value="<?php echo $x; ?>">
    +
    <input name="y" value="<?php echo $y; ?>">
    <input type="submit" value="=">
    <?php
        // if(isset($result))
        echo $result;
    ?>
</form>

