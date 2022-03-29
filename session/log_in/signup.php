
<?php
    session_start();
    require_once 'bd.php';

    $fullname=$_POST['fullname'];
    $login=$_POST['login'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password_confirm=$_POST['password_confirm'];


    $check_u=mysqli_query($connect,"SELECT * FROM `mytable` WHERE `login`='$login' OR `email`='$email'");
    var_dump(mysqli_num_rows($check_u));
    if($password===$password_confirm && empty($fullname && $login && $email &&$password && $password_confirm)==false && mysqli_num_rows($check_u)==0){//mysqli_num_rows($check_u)==0 проверяет существует ли такой пользоваетель если да то 0 если нет то $check_u>0
        $password=md5($password);
        mysqli_query($connect,"INSERT INTO `mytable` (`id_user`, `login`, `password`, `email`, `fullname`) VALUES (NULL, '$login', '$password', '$email', '$fullname')");
        header('Location:login.php');
    }
    else{
        if($password!=$password_confirm)
            $_SESSION['message']='пароли не совпадают';
        elseif(empty($fullname && $login && $email &&$password && $password_confirm)==true)
            $_SESSION['message']='Поля неправильно заполнены';
        elseif(mysqli_num_rows($check_u)!=0)
            $_SESSION['message']='<p style="position:absolute;margin-right:300px;">учетная запись с похожим логином или электронной почтой уже имеется</p>';
        header('Location:register.php');
    }
?>
