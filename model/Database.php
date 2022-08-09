<?php
namespace model;
use PDO;
class Database {
    public $dbh;


   public function __construct()
    {
        $this->dbh = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');

    }

}