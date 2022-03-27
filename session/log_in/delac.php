<?php

session_start();
require_once 'bd.php';

$de=$_SESSION['user']['id_user'];
$dee=$_SESSION[$de];
mysqli_query($connect,"DELETE FROM `mytable` WHERE `mytable`.`id_user`='$de'");
unset($dee);
session_destroy();
header('Location:login.php');

?>
