<?php
    //подключаем файл require_once
require_once("C:/Openserver/OSPanel/domains/GeekbrainsBLOG/database.php");
require_once("C:/Openserver/OSPanel/domains/GeekbrainsBLOG/models/articles.php");

$link = db_connect();
$articles = articles_all($link);

include("C:/Openserver/OSPanel/domains/GeekbrainsBLOG/views/articles.php");


?>