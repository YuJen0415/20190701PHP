<?php
$result1 = $result2 = $result = $op = $x = $y = '';
if (isset($_GET['x'])) {
    $x = $_GET['x'];
    $y = $_GET['y'];
    $op = $_GET['op'];
    if ($op == "1") {
        $result = $x + $y;
    } else if ($op == "2") {
        $result = $x - $y;
    } else if ($op == "3") {
        $result = $x * $y;
    } else {
        $result1 = (int) ($x / $y);
        $result2 = $x % $y;
        $result = $result1 . "..." . $result2;
    }
}
?>
<form action="ron10.php">
    <input id="x" name="x" value="<?php echo $x; ?>">
    <select name="op">
        <option value="1">+</option>
        <option value="2" <?php if($op == "2") echo "selected" ?>>-</option>
        <option value="3" <?php if($op == "3") echo "selected" ?>>x</option>
        <option value="4" <?php if($op == "4") echo "selected" ?>>/</option>
    </select>
    <input id="y" name="y" value="<?php echo $y; ?>">
    <input type="submit" value="=">
    <?php
    echo $result;
    ?>
</form>