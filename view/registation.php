<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
<form action="../controller/action.php" method="post">
    <label>Логин</label>
    <input type="text" name="login" placeholder="Введите свой логин">
    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введите свой пароль">
    <label>Повторите пароль</label>
    <input type="password" name="password2" placeholder="Повторите свой пароль">
    <label>Имя</label>
    <input type="text" name="name" placeholder="Введите своё имя">
    <label>Возраст</label>
    <input type="number" name="age" placeholder="Введите свой возраст">
    <label>Пол</label>
    <input type="text" name="gender" placeholder="Введите свой пол">

    <button>Зарегистрируйтесь</button>
</form>

</body>

</html>