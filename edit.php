<?php
require_once __DIR__ . '/autoload.php';

$article = \App\Models\Article::findById($_GET['id']);

if(isset($_GET['article_update'])){
    $article->title = $_POST['title'];
    $article->contents= $_POST['contents'];
    $article->save();
    header('Location: /admin/');
}


if(isset($_GET['article_delete'])){
    $article->delete();
    header('Location: /admin/');
}

if(isset($_GET['add_new_article'])){
    $art = new App\Models\Article();
    $art->title = $_POST['title'];
    $art->contents= $_POST['contents'];
    $art->save();
    header('Location: /admin/');
}




