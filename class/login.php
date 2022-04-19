<?php
	require_once 'user.php';
	$user = new User();
	$user->LoadFromSession();

	if($user->authorize($_POST) === true) {
		$_SESSION['authorized'] = 1;
		$user->SaveToSession();
		echo '<script>window.location="index.php"</script>' ;
	}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Авторизация</title>
    <link rel='stylesheet' href='style.css' />
</head>
<body>
    <div id='content'>
        <form action='' method='post'>
            <h3>Authorizathion</h3>
            <input type='text' name='login' placeholder='Login' /><br />
            <input type='text' name='pass' placeholder='Password' /><br />
            <input type='submit' name='' />
        </form>
        <a href='register.php'>Регистрация</a>
    </div>
</body>
</html>