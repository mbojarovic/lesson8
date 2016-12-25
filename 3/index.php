<?php

require __DIR__ . '/classes/News.php';
require __DIR__ . '/classes/View.php';

$news = new News();

$view = new View();
$view->set('news', $news->getAllArticles());
$view->display(__DIR__ . '/template/index.php');