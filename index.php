<?php
require_once 'header.php';
//引入樣版檔前，將變化指定要引入tpl檔是什麼
// define('_PAGE_TPL', 'index.tpl');
$page_title = '首頁';
// //引入
// require_once 'function.php';
// require_once 'smarty/libs/Smarty.class.php';
// //產生物件
// $smarty = new Smarty;

// $db = link_db();

$op = isset($_REQUEST['op']) ? htmlspecialchars($_REQUEST['op']) : '';
$sn = isset($_REQUEST['sn']) ? (int) $_REQUEST['sn'] : 0;

switch ($op) {
    default:
        if ($sn) {
            show_article($sn);
            $op = 'show_article';
        } else {
            list_article();
            $op = 'list_article';
        }
        break;

}

require_once 'footer.php';

// $title  = $_POST['title'];
// $color  = $_POST['color'];
// //送變數到樣板
// $smarty->assign('title', $title);
// $smarty->assign('color', $color);
// $smarty->assign('now', date("Y年m月d日 H:i:s"));

//讀出所有文章
function list_article()
{
    global $db, $smarty;
    $sql    = "SELECT * FROM `article` ORDER BY `update_time` DESC LIMIT 0,9";
    $result = $db->query($sql) or die($db->error);
    //PHP7.1之後，不能使用$all='';
    $all = [];
    $i   = 0;
    //while當資料為NULL就停止，fetch_assoc()一次只會抓一筆資料
    while ($data = $result->fetch_assoc()) {
        $all[$i]            = $data;
        $all[$i]['summary'] = mb_substr(strip_tags($data['content']), 0, 90);
        $i++;
    }
    //送$all到樣版檔
    $smarty->assign('all', $all);
}

//讀出單一文章
function show_article($sn)
{
    global $db, $smarty;

    require_once 'HTMLPurifier/HTMLPurifier.auto.php';
    $config   = HTMLPurifier_Config::createDefault();
    $purifier = new HTMLPurifier($config);

    $sql    = "SELECT * FROM `article` WHERE `sn`='$sn'";
    $result = $db->query($sql) or die($db->error);
    //一次只會抓一筆資料
    $data = $result->fetch_assoc();
    //過濾存入的文章有惡意語法
    $data['content'] = $purifier->purify($data['content']);
    // die(var_dump($data));
    //送article到樣版檔
    $smarty->assign('article', $data);
}

//套用樣板
// $smarty->display('index.tpl');
//套用樣板
