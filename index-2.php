<?php
//引入
require_once 'smarty/libs/Smarty.class.php';
//產生物件
$smarty = new Smarty;
$title  = $_POST['title'];
$color  = $_POST['color'];
//送變數到樣板
$smarty->assign('title', $title);
$smarty->assign('color', $color);
$smarty->assign('now', date("Y年m月d日 H:i:s"));
//套用樣板
$smarty->display('index.tpl');
