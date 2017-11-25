<?php
require_once 'loginheader.php';
require_once 'header.php';
//引入樣版檔前，將變化指定要引入tpl檔是什麼
// define('_PAGE_TPL', 'admin.tpl');
$page_title = '管理';

// //引入
// require_once 'function.php';
// require_once 'smarty/libs/Smarty.class.php';
// //產生物件
// $smarty = new Smarty;
// //連接資料庫
// $db = link_db();

// if (isset($_POST['op'])) {
//     $op = htmlspecialchars($_POST['op']);
// } else {
//     $op = '';
// }
//三元運算式 1.條件 ? 真動作一 :假動作二   過濾字串
$op = isset($_REQUEST['op']) ? htmlspecialchars($_REQUEST['op']) : '';
//過濾數字
$sn = isset($_REQUEST['sn']) ? (int) $_REQUEST['sn'] : 0;

switch ($op) {
    case 'insert':
        $sn = insert_article();
        header("location: index.php?sn={$sn}");
        exit;

    case 'delete_article':
        delete_article($sn);
        header("location: index.php");
        exit;

    case "article_form":
        break;

    default:
        $op = "";
// 即預設動作，當變數跟任一個「特定值」都不相符時要進行的動作，一般放在最下方
        break;

}

require_once 'footer.php';

// $smarty->assign('now', date("Y年m月d日 H:i:s"));

//套用樣板
// $smarty->display('admin.tpl');

//儲存文章
function insert_article()
{
    global $db;
    $title    = $db->real_escape_string($_POST['title']);
    $content  = $db->real_escape_string($_POST['content']);
    $username = $db->real_escape_string($_POST['username']);
    $sql      = "INSERT INTO `article` (`title`, `content`,`username`, `create_time`, `update_time`) VALUES('{$title}', '{$content}', '{$username}', now(), now())";
    $db->query($sql) or die($db->error);
    $sn = $db->insert_id;

    if (isset($_FILES)) {
        require_once 'class.upload.php';
        $foo = new Upload($_FILES['pic']);
        if ($foo->uploaded) {
            // save uploaded image with a new name
            //將上傳圖片大到1200
            $foo->file_new_name_body = 'cover_' . $sn;
            $foo->image_resize       = true;
            $foo->image_convert      = png;
            $foo->image_x            = 1200;
            $foo->image_ratio_y      = true;
            $foo->Process('uploads/');
            //如果大圖失敗，小圖就不用做，成功的話小圖縮小成400
            if ($foo->processed) {
                $foo->file_new_name_body = 'thumb_' . $sn;
                $foo->image_resize       = true;
                $foo->image_convert      = png;
                $foo->image_x            = 400;
                $foo->image_ratio_y      = true;
                $foo->Process('uploads/');
            }
        }

        // $ext = pathinfo($_FILES['pic']['name'], PATHINFO_EXTENSION);
        // if (!is_dir('uploads')) {
        //     mkdir('uploads');
        // }
        // move_uploaded_file($_FILES['pic']['tmp_name'], "uploads/{$sn}.{$ext}");
    }

    return $sn;
}

function delete_article($sn)
{
    global $db;

    $sql = "DELETE FROM `article` WHERE sn='{$sn}' and username='{$_SESSION['username']}'";
    $db->query($sql) or die($db->error);

}
