<?php
require __DIR__ . '/../model/Database.php';
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
$db = new \model\Database();


if (!$db->dbh) {
    echo 'Что то пошло не так!';
}
else {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    $login2 = $_POST['login2'];
    $password12 = $_POST['password12'];
    $password22 = $_POST['password22'];
    $name2 = $_POST['name2'];
    $age2 = $_POST['age2'];
    $gender2 = $_POST['gender2'];

    if(strlen($password) < 6 && strlen($password12) < 6) {
        alert('Пароль должен быть минимум 6 символов');
        //echo 'Привет 6 символов';
        include_once __DIR__ . '/../view/registation.php';
    }
    else {
        if($password !== $password2 && $password12 !== $password22) {
            alert('Пароли не совпадают, пожалуйста заполните форму еще раз');
           // echo 'Пароли не совпали';
            include_once __DIR__ . '/../view/registation.php';
        }
        else {
            if ($age < 18 && $age2 < 18 ) {
               alert('Сюда нельзя!');
            }
            else {
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
        }
    }
}


