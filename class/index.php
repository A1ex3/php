<?php
header('Content-Type: text/html; charset=utf-8');
require_once 'user.php';

$user = new User();
$user->set('Alex', 'a', '123');
$user->SaveToSession();
$user->show();
?>