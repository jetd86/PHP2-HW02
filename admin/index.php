<?php
require_once __DIR__ . '/../autoload.php';
$news = \App\Models\Article::findAll();



include __DIR__ . '/../templates/header_html.php';
include __DIR__ . '/../templates/admin_html.php';
include __DIR__ . '/../templates/footer_html.php';