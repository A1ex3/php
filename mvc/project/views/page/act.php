<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
</head>
<body>
    <div>
        это представление
	действия act контроллера test
    </div>
    <h1>
        <?= $header ?>
    </h1>
    <ul>
        <?php foreach ($users as $user): ?>
        <li>
            <?= $user; ?>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>