<?php
/* Smarty version 3.1.30, created on 2017-11-25 08:34:29
  from "D:\qmo\UniServerZ\www\reporter\templates\op_article_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a192b15de0002_90570892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a194cb4d3f2c203e46cafbcf3f6de0707f129e7' => 
    array (
      0 => 'D:\\qmo\\UniServerZ\\www\\reporter\\templates\\op_article_form.tpl',
      1 => 1511598861,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a192b15de0002_90570892 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="js/languages/jquery.validationEngine-zh_TW.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css">


<?php echo '<script'; ?>
 src="ckeditor/ckeditor.js"><?php echo '</script'; ?>
>


<form action="admin.php" method="post" enctype="multipart/form-data" class="my-4" id="myform">
    <div class="form-group">
        <!--                                     sr-only  隱藏 -->
        <label for="title" class="col-form-label sr-only">文章標題</label>
        <input name="title" type="text" class="form-control validate[required]" id="title" placeholder="請輸入文章標題">
    </div>
    <div class="form-group">
        <label for="content" class="col-form-label sr-only">文章內容</label>
        <textarea name="content" id="content" rows="20" class="form-control validate[required, minSize[10]]" placeholder="請輸入文章內容"></textarea>
    </div>
    <div class="form-group">
        <label for="title" class="col-form-label sr-only">封面圖</label>
        <input type="file" class="form-control" name="pic" id="pic" placeholder="請上傳一張封面圖">
    </div>

    <div class="text-center">
        <input type="hidden" name="op" value="insert">
        <input type="hidden" name="username" value="<?php echo $_SESSION['username'];?>
">
        <button type="submit" class="btn btn-primary">儲存</button>
    </div>
</form>

<?php echo '<script'; ?>
>
    CKEDITOR.replace('content');

    //驗證欄位是否有輸入
    $(document).ready(function () {
        $('#myform').validationEngine({ promptPosition: "bottomLeft" });
    });

<?php echo '</script'; ?>
><?php }
}
