<?php
require_once __DIR__ . '/autoload.php';

if(isset($_GET['article_update'])){
    $article = \App\Models\Article::findById($_GET['id']);
    $article->title = $_POST['title'];
    $article->contents= $_POST['contents'];
    $article->update();
    header('Location: /admin/');
}