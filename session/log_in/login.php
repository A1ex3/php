<?php
session_start();

if($_SESSION[$dee]){
    header('Location:../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Document</title>
    <link rel="stylesheet" href="../styles.css" />
</head>
<body>
        <form class="logn" action="signin.php" method="post">
         <h2 class="vx">Вход</h2>
        <p></p>
        <input required="" type="text" name="name" placeholder="login" />
        <p></p>
        <input required=""  type="password" name="pas" placeholder="password" />
        <p></p>
        <input  class="vo" type="submit" value="Войти" />
        <p>если у вас нет учетной записи, то тогда </p><?php if(!$_SESSION[$dee]) echo"<a style='text-decoration:none;color:darkred;' class='zarg' href='register.php'>зарегестрируйтесь</a>" ?>
            <?php
            if($_SESSION['message']){
                echo '<p class="msg"> '.$_SESSION['message'].' </p>';
            }
            unset($_SESSION['message']);
            ?>
        </form>
    
</body>
</html>