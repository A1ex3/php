<?php
function f(){
    
    $birthday=$_POST['inp'];
    $arr = explode('.', $birthday);
    $tm=mktime(0, 0, 0, $arr[1], $arr[0], date('Y'));
    if($tm<time()) $tm=mktime(0, 0, 0, $arr[1], $arr[0], date('Y')+1);
    echo intval( ($tm-time())/86400 );
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
      <p><input required="" type="text" name="inp"></p>
      <input type="submit" name="sub">
    </form>
        <span><?php f()?></span>
        </p>
    </form>
</body>
</html>