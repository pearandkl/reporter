<?php
//在網址後方打?title=123
$title = $_GET['title'];
echo $title;
echo '<br>';
//在網址後方打?title=123&money=456
$money = (int) $_GET['money'];
var_dump($money);
