<?php
function f(){
    
    $a=pow($_POST['inp'],2);
    $b=pow($_POST['inpu'],2);
    $c=pow($_POST['inpp'],2);

    $max=max([$a,$b,$c]);
    var_dump($max);
    if($max==$a+$b || $max==$a+$c || $max==$b+$c){
        echo true;
    }
    else
        echo false;
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
      <p>¬ведите a: <input required="" type="number" name="inp"></p>
      <p>¬ведите b: <input required="" type="number" name="inpu"></p>
      <p>¬ведите c: <input required="" type="number" name="inpp"></p>
      <input type="submit" name="sub">
    </form>
        <span><?php f()?></span>
        </p>
    </form>
</body>
</html>