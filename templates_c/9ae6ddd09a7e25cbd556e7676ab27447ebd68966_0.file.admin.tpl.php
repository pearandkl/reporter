<?php
/* Smarty version 3.1.30, created on 2017-11-18 07:19:25
  from "D:\qmo\UniServerZ\www\reporter\templates\admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0fdefdaae106_84666589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ae6ddd09a7e25cbd556e7676ab27447ebd68966' => 
    array (
      0 => 'D:\\qmo\\UniServerZ\\www\\reporter\\templates\\admin.tpl',
      1 => 1510989099,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:op_".((string)$_smarty_tpl->tpl_vars[\'op\']->value).".tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a0fdefdaae106_84666589 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="zh-Hant-TW">

    <head>
        <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </head>

    <body>
        <!-- 導覽 -->
        <?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <!-- 容器放底圖 -->
        <div class="img-container">
            <!-- 再用DIV放文字 -->
            <div class="container">
                <!-- 自動載入 $op 對應的樣板檔 -->
                <?php $_smarty_tpl->_subTemplateRender("file:op_".((string)$_smarty_tpl->tpl_vars['op']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

            </div>
        </div>

        <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    </body>

</html><?php }
}
