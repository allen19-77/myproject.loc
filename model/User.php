<?php

class User {
    public $login;
    public $password;
    public $confirmPassword;
    public $name;
    public $age;
    public $gender;

    public function __construct($login, $password, $confirmPassword,$name, $age, $gender)
    {
        $this->login = $login;
        $this->password = $password;
        $this->confirmPassword = $confirmPassword;
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    public function isAgeValid()
    {
        if ($this->age < 18) {
            alert('Сюда нельзя!');
            return false;
        } else {
            return true;
        }
    }


    public function isPasswordValid()
    {
        if (strlen($this->password) < 6) {
            alert('Пароль  должен быть минимум 6 символов');
            include_once __DIR__ . '/../view/registation.php';
            return false;

        } else {
            return true;
        }
    }

    public function isConfirmPasswordValid()
    {
        if ($this->password !== $this->confirmPassword) {
            alert('Пароли  не совпадают, пожалуйста заполните форму еще раз');
            include_once __DIR__ . '/../view/registation.php';
            return false;
        } else {
            return true;
        }
    }

}