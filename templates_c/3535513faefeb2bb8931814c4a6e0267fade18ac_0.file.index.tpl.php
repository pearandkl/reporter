<?php
/* Smarty version 3.1.30, created on 2017-11-18 07:55:44
  from "D:\qmo\UniServerZ\www\reporter\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0fe780e74916_49828409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3535513faefeb2bb8931814c4a6e0267fade18ac' => 
    array (
      0 => 'D:\\qmo\\UniServerZ\\www\\reporter\\templates\\index.tpl',
      1 => 1510991717,
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
function content_5a0fe780e74916_49828409 (Smarty_Internal_Template $_smarty_tpl) {
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
       
        <!-- 圖片下第二組文字用假文產生器 -->
        <!-- <div class="container">
            <h2 class="lipsum(1,10-15) pt-3"></h2>
            <p class="lipsum(3,20-50)"></p>
            <p class="lipsum(5,60-70)"></p>
            <p class="lipsum(7,30-50)"></p>
        </div> -->

        <!-- 自動載入 $op 對應的樣板檔 -->
        <?php $_smarty_tpl->_subTemplateRender("file:op_".((string)$_smarty_tpl->tpl_vars['op']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

        <!-- -->
        <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    </body>

</html><?php }
}
