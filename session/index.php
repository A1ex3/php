<?php
session_start();

if(!$_SESSION['user'])
    header('Location:login/login.php');
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
        <a href="forma.php">
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
    <a href="log_in/logout.php">Exit</a>
    <p></p>
    </form>
    <form action="log_in/delac.php" method="post">
        <button type="submit">удалить аккаунт</button>
    </form>
        
    </div>
</body>
</html>