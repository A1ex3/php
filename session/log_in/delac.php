<?php

session_start();
require_once 'bd.php';

$de=$_SESSION['user']['id_user'];
$dee=$_SESSION[$de];
$ppasw=md5($_POST['ppasw']);
$check_pasw=$_SESSION['user']['password'];
echo $ppasw;
if($ppasw===$check_pasw){//проверка пароля перед удалением
    mysqli_query($connect,"DELETE FROM `mytable` WHERE `mytable`.`id_user`='$de'");
    unset($dee);
    session_destroy();
    header('Location:login.php');
}
else{
    $_SESSION['mes']='неверный пароль';
    header('Location:../index.php');
}


?>

