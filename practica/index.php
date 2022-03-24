<?php
function f(){
    
    $a=$_POST['inp'];
    $b=$_POST['inpu'];
    $c=$_POST['inpp'];



        $d = ($b*$b) - (4*$a*$c);
        if($d > 0){
            $x1 = ((-$b) - sqrt($d))/2*$a;
            $x2 = ((-$b) + sqrt($d))/2*$a;
            echo 'X1 = '. $x1 . '<br>';
            echo 'X2 = '.$x2 . '<br>';
        }
        elseif($d == 0) {
            $x2 = ((-$b) + sqrt($d))/2*$a;
            echo 'X1 = '.$x2 . '<br>';
        }
        else {
            echo "D = $d < 0, уравнение не имеет действительных корней";
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