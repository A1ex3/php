<?php

session_start();

if($_SESSION[$dee])
    header('Location:index.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>title</title>
<meta charset="utf-8" />
<link href="../styles.css" rel="stylesheet" />
</head>
<body><!--required=""-->
    <form class="regg" action="signup.php" method="post" enctype="multipart/form-data">
        <div id="st">
        <label>ФИО</label>
        <input required="" type="text" name="fullname" placeholder="Введите свое полное имя"/>
        <p></p>
        <label>Логин</label>
        <input required="" type="text" name="login" placeholder="Введите свой логин" />
        <p></p>
        <label>Почта</label>
        <input required="" type="email" name="email" placeholder="Введите адрес своей почты" />
        <p></p>
        <label>Пароль</label>
        <input required="" type="password" name="password" placeholder="Введите пароль" />
        <p></p>
        <label>Подтверждение пароля</label>
        <input required="" type="password" name="password_confirm" placeholder="Подтвердите пароль" />
        <p></p>
        <button class="but" type="submit">Зарегестрироваться</button>
        <p class="msg">
            <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            ?>
        </p>
        </div>
    </form>
</body>
</html>