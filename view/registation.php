<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
<form action="../controller/userController.php" method="post">
    <label>Логин</label>
    <input type="text" name="login" placeholder="Введите свой логин">
    <label>Логин2</label>
    <input type="text" name="login2" placeholder="Введите свой логин">

    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введите свой пароль">
    <label>Повторите пароль</label>
    <input type="password" name="password2" placeholder="Повторите свой пароль">
    <label>Пароль2</label>
    <input type="password" name="password12" placeholder="Введите свой пароль">
    <label>Повторите пароль2</label>
    <input type="password" name="password22" placeholder="Введите свой пароль">

    <label>Имя</label>
    <input type="text" name="name" placeholder="Введите своё имя">
    <label>Имя2</label>
    <input type="text" name="name2" placeholder="Введите своё имя">

    <label>Возраст</label>
    <input type="number" name="age" placeholder="Введите свой возраст">
    <label>Возраст2</label>
    <input type="number" name="age2" placeholder="Введите свой возраст">

    <label>Пол</label>
    <input type="text" name="gender" placeholder="Введите свой пол">
    <label>Пол2</label>
    <input type="text" name="gender2" placeholder="Введите свой пол">

    <button>Зарегистрируйтесь</button>
</form>

</body>

</html>