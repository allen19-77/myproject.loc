<?php

require_once __DIR__ . '/../model/Database.php';
require_once __DIR__ . '/../model/User.php';
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

    $userOne->isPasswordValid();

    $userTwo->isPasswordValid();

    $userOne -> isConfirmPasswordValid();

    $userTwo -> isConfirmPasswordValid();

    $userOne->isAgeValid();
    $userTwo->isAgeValid();


    //todo: Ахтунг, сохранять пытается в любом случае
    $sql = 'INSERT INTO users (id, login, password, name, age, gender) 
            VALUES (NULL, :login, :password, :name, :age, :gender)';
    $stmt = $db->dbh->prepare($sql);
    $result = $stmt->execute([
        'login' =>$userOne->login,
        'name' =>$userOne->name,
        'password' =>$userOne->password,
        'age' =>$userOne->age,
        'gender' =>$userOne->gender,
    ]);

    $sql = 'INSERT INTO users (id, login, password, name, age, gender) 
            VALUES (NULL, :login, :password, :name, :age, :gender)';
    $stmt = $db->dbh->prepare($sql);
    $result = $stmt->execute([
        'login' =>$userTwo->login,
        'name' =>$userTwo->name,
        'password' =>$userTwo->password,
        'age' =>$userTwo->age,
        'gender' =>$userTwo->gender,
    ]);
    alert('Вы успешно зарегились');
    include_once __DIR__ . '/../view/note.php';
}


