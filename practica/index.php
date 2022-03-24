<?php
$c=$_POST['inp'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>title</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="inp" value="<?php echo $c*33.8; ?>" />
        <input type="submit" name="cl"/>
    </form>
</body>
</html>