<?php
function f(){
    
    $birthday = $_POST['inp'];

    $cd = new \DateTime('today'); 
    $bd = new \DateTime($birthday); 
    $bd->setDate($cd->format('Y'), $bd->format('m'), $bd->format('d'));
    $tmp = $cd->diff($bd);
    if($tmp->invert){ 
        $bd->modify('+1 year'); 
        $tmp = $cd->diff($bd); 
    }
    echo $tmp->days; 
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
      <p><input required="" type="date" name="inp"></p>
      <input type="submit" name="sub">
    </form>
        <span><?php f()?></span>
        </p>
    </form>
</body>
</html>