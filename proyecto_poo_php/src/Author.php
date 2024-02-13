<?php

namespace App;

class Author extends User {
    private $post = [];

    function __construct( $name, $email, $password, $user) {
        parent::__construct($name, $email, $password, $user);
    }

    public function addPost(Post $post){
        $this->post[] = $post;
    }

    public function countPost(){
        return count($this->post);
    }
}
