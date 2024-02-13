<?php

use PHPUnit\Framework\TestCase;
use App\Post;
use App\Comment;
use App\Author;
use App\Category;

class PostTest extends TestCase {

    public function test_add_comment_to_post(){

        // creo objetos a partir de las clases a testear
        $post = new Post(); // crea post
        $comment = new Comment(); // crea comentario

        // crea un comentario en el post
        $post->addComment($comment);


        // prueba las afirmaciones o aserciones

        // comprueba que si se tiene un post
        $this->assertEquals(1, $post->countComments());

        // verifica que el comentario creado sea una instancia real de la clase comment y revisamos el primer comentrario
        $this->assertInstanceOf(Comment::class, $post->getComments()[0]);
    }

    public function test_add_post(){

        // creo objetos a partir de las clases a testear
        $post = new Post(); 
        $author = new Author("pablo", "pablo@pablito.com", "123456", "pablito"); 
        $category = new Category();


        // crea un comentario en el post
        $author->addPost($post);
        $category->addPost($post);


        // prueba las afirmaciones o aserciones

        // comprueba que si se tiene un post
        $this->assertEquals(1, $author->countPost());
        $this->assertEquals(1, $category->countPost());
    }

}

