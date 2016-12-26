<?php

require __DIR__ . '/classes/News.php';
require __DIR__ . '/classes/View.php';

$newsOne = new News();

if (isset($_GET['id'])) {
    $id  = $_GET['id'];
} else {
    header('location: /lesson8/3/index.php');
}

$view = new View();
$view->set('newsOne', $newsOne->getOneArticle($id));
$view->display(__DIR__ . '/template/article.php');