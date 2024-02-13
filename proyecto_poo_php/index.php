<?php

require __DIR__ . '/vendor/autoload.php';

use App\Post;
use App\Comment;
use App\Author;
use App\Category;

$author = new Author("pepito perez", "pepito@perez.com", "1232434", "pepitop");
$category = new Category();
$post = new Post();


$author->addPost($post);
$category->addPost($post);

$comentario1 = new Comment();
$comentario2 = new Comment();
$comentario3 = new Comment();
$comentario4 = new Comment();
$comentario5 = new Comment();

$post->addComment($comentario1);
$post->addComment($comentario2);
$post->addComment($comentario3);
$post->addComment($comentario4);
$post->addComment($comentario5);

$comments = $post->getComments();

$count_comments = $post->countComments();
$count_comments2 = count($comments);

echo "la cantidad de comentarios es $count_comments lo mismo que $count_comments2";
 

// Pendiente terminar -> estoy enferma
