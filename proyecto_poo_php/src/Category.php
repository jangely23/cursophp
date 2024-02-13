<?php

namespace App;

class Category {
    private $post = [];

    public function addPost(Post $post){

        $this->post[] = $post;
    }

    public function countPost(){
        return count($this->post);
    }
}