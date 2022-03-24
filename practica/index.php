<?php
$c=$_POST['inp'];
$factorial = 1;

for ($i = 1; $i <= $c; $i++) {
    $factorial *= $i;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>title</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="inp" value="" />
        <input type="submit" name="cl"/>
        <p>
        <span>Factorial = </span>
        <?php echo $factorial; ?>
        </p>
    </form>
</body>
</html>