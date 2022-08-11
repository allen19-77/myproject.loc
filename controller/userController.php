<?php
function isAgeValid($age)
{
    if ($age < 18 ) {
        alert('Сюда нельзя!');
        return false;
    } else {
        return true;
    }
}


require __DIR__ . '/../model/Database.php';
require __DIR__ . '/../model/User.php';
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
$db = new \model\Database();


if (!$db->dbh) {
    echo 'Что то пошло не так!';
}
else {
    $userOne = new User( $_POST['login'], $_POST['password'], $_POST['password2'], $_POST['name'], $_POST['age'], $_POST['gender']);
    $userTwo = new User($_POST['login2'], $_POST['password12'], $_POST['password22'], $_POST['name2'], $_POST['age2'], $_POST['gender2']);




    //todo: Ахтунг, дублирует форму
    if (strlen($password) < 6) {
        alert('Пароль 1 должен быть минимум 6 символов');
        //echo 'Привет 6 символов';
        include_once __DIR__ . '/../view/registation.php';
    }
    if (strlen($password12) < 6) {
        alert('Пароль 2 должен быть минимум 6 символов');
        //echo 'Привет 6 символов';
        include_once __DIR__ . '/../view/registation.php';
    }
    if ($password !== $password2) {
        alert('Пароли 1 не совпадают, пожалуйста заполните форму еще раз');
        // echo 'Пароли не совпали';
        include_once __DIR__ . '/../view/registation.php';
    }
    if ($password12 !== $password22) {
        alert('Пароли 2 не совпадают, пожалуйста заполните форму еще раз');
        // echo 'Пароли не совпали';
        include_once __DIR__ . '/../view/registation.php';
    }
    isAgeValid($age);
    isAgeValid($age2);

    //todo: Ахтунг, сохранять пытается в любом случае
    $sql = 'INSERT INTO users (id, login, password, name, age, gender) 
            VALUES (NULL, :login, :password, :name, :age, :gender)';
    $stmt = $db->dbh->prepare($sql);
    $result = $stmt->execute([
        'login' => $login,
        'name' => $name,
        'password' => $password,
        'age' => $age,
        'gender' => $gender,
    ]);

    $sql = 'INSERT INTO users (id, login, password, name, age, gender) 
            VALUES (NULL, :login, :password, :name, :age, :gender)';
    $stmt = $db->dbh->prepare($sql);
    $result = $stmt->execute([
        'login' => $login2,
        'name' => $name2,
        'password' => $password12,
        'age' => $age2,
        'gender' => $gender2,
    ]);
    alert('Вы успешно зарегились');
    include_once __DIR__ . '/../view/note.php';
}


