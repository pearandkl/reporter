<?php
if (!isset($_SESSION)) {
    session_start();
}

//引入
require_once 'function.php';
require_once 'smarty/libs/Smarty.class.php';
//產生物件
$smarty = new Smarty;
//連接資料庫
$db = link_db();
//自動抓樣板檔                    將PHP  換成TPL  抓取主機路徑
define('_PAGE_TPL', str_replace('.php', '.tpl', basename($_SERVER['PHP_SELF'])));
