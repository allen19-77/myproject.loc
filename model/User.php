<?php

class User {
    public $login;
    public $password;
    public $confirmPassword;
    public $name;
    public $age;
    public $gender;
    public $errors = [];

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
            $this->errors[] = 'Сюда нельзя!';
            return false;
        } else {
            return true;
        }
    }


    public function isPasswordValid()
    {
        if (strlen($this->password) < 6) {
            $this->errors[] = 'Пароль  должен быть минимум 6 символов';
            return false;

        } else {
            return true;
        }
    }

    public function isConfirmPasswordValid()
    {
        if ($this->password !== $this->confirmPassword) {
           $this->errors[] = 'Пароли  не совпадают, пожалуйста заполните форму еще раз';
           return false;
        } else {
            return true;
        }
    }

}