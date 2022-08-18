<?php

require_once __DIR__ . '/../model/Database.php';
function alert($msg)
{
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

$db = new \model\Database();

$login = $_POST['login'];
$password = $_POST['password'];

//выбираем логин
$sql = 'SELECT login, password from users WHERE login = :name';
$stmt = $db->dbh->prepare($sql);
$stmt->execute([':name' => $login]);
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

/*echo '<pre>';
var_dump($rows);

var_dump($rows[0]['password']);
echo '</pre>';
var_dump(count($rows));*/

if(empty($rows))

if (count($rows) === 0) {
    echo 'Данный аккаунт не зарегистрирован';
    include('auth.php');
} else {
    if($password !== $rows[0]['password']) {
        echo 'Неправильный пароль';
        include('noteController.php');
    } else {
        echo 'Добро пожаловать';
    }

}



