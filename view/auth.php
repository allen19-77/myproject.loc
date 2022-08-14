
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Registration and Autorization</title>
	<link rel="stylesheet" href="../style.css">
</head>

<body>
	<form action="../controller/authController.php" method="post">
		<label>Логин</label>
		<input type="text" name="login" placeholder="Введите свой логин">
		<label>Пароль</label>
		<input type="password" name="password" placeholder="Введите свой пароль">


		<button>Войти</button>
	</form>

</body>

</html>
