<?php

require __DIR__ . '/../model/Post.php';

class Post {
    public $heading;
    public $message;

    public function __construct($heading,$message) {
        $this->heading = $heading;
        $this->message = $message;
    }

    //public function
}