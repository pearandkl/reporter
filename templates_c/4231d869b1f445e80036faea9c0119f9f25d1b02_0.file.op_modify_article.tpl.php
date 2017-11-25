<?php
/* Smarty version 3.1.30, created on 2017-11-25 07:23:01
  from "D:\qmo\UniServerZ\www\reporter\templates\op_modify_article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a191a552d57e7_71028681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4231d869b1f445e80036faea9c0119f9f25d1b02' => 
    array (
      0 => 'D:\\qmo\\UniServerZ\\www\\reporter\\templates\\op_modify_article.tpl',
      1 => 1511594574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a191a552d57e7_71028681 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="ckeditor/ckeditor.js"><?php echo '</script'; ?>
>

<form action="admin.php" method="post" enctype="multipart/form-data" class="my-4">
    <div class="form-group">
        <label for="title" class="col-form-label sr-only">文章標題</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="請輸入文章標題" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
">
    </div>
    <div class="form-group">
        <label for="content" class="col-form-label sr-only">文章內容</label>
        <textarea name="content" id="content" rows="20" class="form-control" placeholder="請輸入文章內容"><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</textarea>
    </div>
    <div class="form-group">
        <label for="title" class="col-form-label sr-only">封面圖</label>
        <input type="file" class="form-control" name="pic" id="pic" placeholder="請上傳一張封面圖">
    </div>
    <div class="text-center">
        <input type="hidden" name="sn" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
">
        <input type="hidden" name="op" value="update">
        <input type="hidden" name="username" value="<?php echo $_SESSION['username'];?>
">
        <button type="submit" class="btn btn-primary">更新</button>
    </div>
</form>

<?php echo '<script'; ?>
>
    CKEDITOR.replace('content');

<?php echo '</script'; ?>
><?php }
}
