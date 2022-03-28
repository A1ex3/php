<?php
session_start();

if(!$_SESSION['user'])
    header('Location:log_in/login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Document</title>
    <link href="styles.css" rel="stylesheet" />
</head>
<body>
    <div class="glavn">
    <form>
    <h1>Главная</h1>
    <h2>
        <?php echo "Hello " ?>
        <a href="forma.php" style="color:steelblue;text-decoration:none;">
            <?php echo $_SESSION['user']['login']; ?>
        </a>
    </h2>
    <h1>Форма:</h1>
    <p>
        <span>Имя: </span><?php echo $_SESSION['user']['fullname']; ?>
    </p>
    <p>
        <span>Фамилия: </span><?php echo $_SESSION['snamee']; ?>
    </p>    
    <p>
        <span>Почта: </span><?php echo $_SESSION['user']['email']; ?>
    </p>
    <a style="color:red;text-decoration:none;" href="log_in/logout.php">Exit</a>
    <p></p>
    </form>

    <form action="log_in/delac.php" method="post">
        <div id="zatemnenie">
            <div id="okno">
                <span style="color:white; font-size:15px;">Подтвердите пароль для удаления аккаунта</span>
                <p></p>
                <input type="password" name="ppasw" placeholder="введите пароль" required="" />
                <p style="color:red;">
                <?php
                if($_SESSION['mes']){
                    echo $_SESSION['mes'];
                }unset($_SESSION['mes']);
                ?>
                </p>
                <p></p>
                <button class="podt" type="submit">подтвердить</button>
                <a style="font-size:13px;" href="#" class="close">Закрыть окно</a>
            </div>
        </div>
            <a class="dlee" href="#zatemnenie";>Удалить учетную запись</a>
       
    </form>
        
    </div>
</body>
</html>