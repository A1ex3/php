<?php
function dl(){
    $a=$_POST['inp'];
    for ($i=1; $i<=$a; $i++){
        if ($a % $i==0)
            echo "<ul style=line-height:2px;><li>$i</li></ul>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>title</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="inp" value="" />
        <input type="submit" name="cl" />
        <p>
        <span><?php dl()?></span>
        </p>
    </form>
</body>
</html>