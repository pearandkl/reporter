<?php
require_once 'header.php';
$page_title = '嗨~又見面嘍~~~';
$op         = '';

if (isset($_SESSION['username'])) {
    header("location:index.php");
}
require_once 'footer.php';
