<?php
header('Content-Type: text/html; charset=utf-8');
require_once 'student.php';
require_once 'group.php';

$g1 = new Group(1, 'И-01');
$g2 = new Group(1, 'И-02');
$g3 = new Group(1, 'И-03');

$s1 = new Student('Пакшин','Александр','Андреевич', $g3);
$s2 = new Student('','','', $g3);
$s2 = new Student('','','', $g3);
$g3->display();
?>