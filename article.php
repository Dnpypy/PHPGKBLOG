<?php

// подключаемся базу
require_once("database.php");

// подключаем набор функций
require_once("models/articles.php");

// вызываем функцию кооторая находится в моделях models

$article = articles_all($link, $_GET['id']);

// Соединение с базой 
$link = db_connect();

include("view/article.php");
?>
