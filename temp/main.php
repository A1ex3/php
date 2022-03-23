<?php

	header('content-type: text/html; charset=utf-8');
	$num1=$_POST['n'];
	$num2=$_POST['na'];
	$s=$_POST['nn'];
	$c=0;
	/*
	if($s=='+'){$c=$num1+$num2;}
	elseif ($s=='-'){$c=$num1-$num2;}
	elseif($s=='*'){$c=$num1*$num2;}
	elseif($s=='/'){$c=$num1/$num2;}
	*/
	switch ($s) {
		case '+':
			$c=$num1+$num2;
			break;
		case '-':
			$c=$num1-$num2;
			break;
		case '*':
			$c=$num1*$num2;
			break;
		case '/':
			if($num2 == 0){echo 'Делить на 0 нельзся ';}
			else{


			$c=$num1/$num2;
		
		}
		break;
		default:
			echo '';
			break;
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>title</title>
</head>
<body>
	<form action="main.php" method="POST">
		<b>x=</b>
		<input type="text" name="n"><br>
		<b>y=</b>
		<input type="text" name="na"><br>
		<input type="submit" value="Посчитать">

		<select name="nn">
   		<option value="+">+</option>
	   	<option value="-">-</option>
	   	<option value="*">*</option>
	   	<option value="/">/</option>
	  	</select>
	</form>
	<input type="text" value="<?php echo $c;?>">
	<p><a href="https://yandex.ru/" style="text-decoration:none;color:red;">home</a></p>
</body>
</html>