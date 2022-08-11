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
    /*public function __construct($login, $password, $confirmPassword, $name, $age, $gender)
    {
        $this->login = $login;
        $this->password = $password;
        $this->confirmPassword = $confirmPassword;
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }*/

}