<?php
function dl(){
    $a=$_POST['inp'];
    $b=$_POST['inpu'];
    $i=1;
    while ($i<=$a and $i<=$b){
        if($a % $i==0 and $b%$i==0)
            echo "<ul style=line-height:2px;><li>$i</li></ul>";
        $i++;

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
        <p></p>
        <input type="text" name="inpu" value="" />
        <input type="submit" name="cl" />
        <p>
        <span><?php dl()?></span>
        </p>
    </form>
</body>
</html>