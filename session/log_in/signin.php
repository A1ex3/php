<?php

    session_start();
    require_once'bd.php';

    $login=$_POST['name'];
    $password=md5($_POST['pas']);

    $check_user=mysqli_query($connect,"SELECT * FROM `mytable` WHERE `login`='$login' AND `password`='$password'");
    $user=mysqli_fetch_assoc($check_user);
    print_r($user);
    if(mysqli_num_rows($check_user)>0){
        $_SESSION['user']=[
        "id_user"=>$user['id_user'],
        "login"=>$user['login'],
        "email"=>$user['email'],
        "fullname"=>$user['fullname']
    ];
    header('Location:../index.php');
    }else{
        $_SESSION['message']='Не верный логин или пароль';
        header('Location:login.php');
    }
?>