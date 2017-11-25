<?php
/* Smarty version 3.1.30, created on 2017-11-18 08:16:22
  from "D:\qmo\UniServerZ\www\reporter\templates\op_show_article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0fec561fa763_07525281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f34771f6c24f0f0c9f4e350d03a5bffb4283eb6e' => 
    array (
      0 => 'D:\\qmo\\UniServerZ\\www\\reporter\\templates\\op_show_article.tpl',
      1 => 1510992484,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0fec561fa763_07525281 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
        <h1><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h1>
        <p><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</p>

        <div class="alert alert-info text-center">
                <a href="admin.php?op=delete_article&sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
" class="btn btn-danger">刪除</a>
                <a href="admin.php?op=modify_article&sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
" class="btn btn-warning">編輯</a>
        </div>

</div><?php }
}
