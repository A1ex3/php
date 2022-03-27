
<?php
    session_start();
    require_once 'bd.php';

    $fullname=$_POST['fullname'];
    $login=$_POST['login'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password_confirm=$_POST['password_confirm'];

    if($password===$password_confirm){
        $password=md5($password);
        mysqli_query($connect,"INSERT INTO `mytable` (`id_user`, `login`, `password`, `email`, `fullname`) VALUES (NULL, '$login', '$password', '$email', '$fullname')");
        header('Location:login.php');
    }else{
        $_SESSION['message']='Пароли не совпадают';
        header('Location:register.php');
    }

?>
