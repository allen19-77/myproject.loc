<?php

class User {
    public $login;
    public $password;
    public $name;
    public $age;
    public $gender;

    public function __construct($login, $password, $name, $age, $gender)
    {
        $this->login = $login;
        $this->password = $password;
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

}