<?php
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

$dbh = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');

if (!$dbh) {
    echo 'Что то пошло не так!';
}
else {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    if(strlen($password) < 6) {
        alert('Пароль должен быть минимум 6 символов');
        //echo 'Привет 6 символов';
        include_once __DIR__ . '/../view/registation.php';
    }
    else {
        if($password !== $password2) {
            alert('Пароли не совпадают, пожалуйста заполните форму еще раз');
           // echo 'Пароли не совпали';
            include_once __DIR__ . '/../view/registation.php';
        }
        else {
            if ($age < 18) {
               alert('Сюда нельзя!');
            }
            else {
                $sql = 'INSERT INTO users (id, login, password, name, age, gender) 
                        VALUES (NULL, :login, :password, :name, :age, :gender)';
                $stmt = $dbh->prepare($sql);
                $result = $stmt->execute([
                    'login' => $login,
                    'name' => $name,
                    'password' => $password,
                    'age' => $age,
                    'gender' => $gender,
                ]);
                alert('Вы успешно зарегились');
                include('../note.php');
            }
        }
    }
}


