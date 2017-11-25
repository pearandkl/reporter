<?php
/* Smarty version 3.1.30, created on 2017-11-18 07:57:44
  from "D:\qmo\UniServerZ\www\reporter\templates\op_list_article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0fe7f8c104c8_82412631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df371b928839ff9f17b794d56ce759e501f0946d' => 
    array (
      0 => 'D:\\qmo\\UniServerZ\\www\\reporter\\templates\\op_list_article.tpl',
      1 => 1510991821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0fe7f8c104c8_82412631 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="img-container">
        <!-- 再用DIV放文字 -->
        <div class="container">
        </div>
</div>

<div class="container">
        <h1 class="my-3 text-center">最新文章</h1>
        <div class="row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all']->value, 'article');
$_smarty_tpl->tpl_vars['article']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->index++;
$__foreach_article_0_saved = $_smarty_tpl->tpl_vars['article'];
?>
                <div class="col-sm-4">
                        <?php $_smarty_tpl->_assignInScope('cover', "uploads/thumb_".((string)$_smarty_tpl->tpl_vars['article']->value['sn']).".png");
?>
                        <?php if (file_exists($_smarty_tpl->tpl_vars['cover']->value)) {?>
                        <!--                                                            rounded將圖片導圓角 -->
                                <img src="<?php echo $_smarty_tpl->tpl_vars['cover']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
" class="rounded cover">
                        <?php } else { ?>
                        <!-- 如果沒圖片就用假圖顯示 -->
                                <img src="https://picsum.photos/400/300?image=<?php echo $_smarty_tpl->tpl_vars['article']->index;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
" class="rounded cover">                        
                        <?php }?>
                        <h3><a href="index.php?sn=<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></h3>
                        <p><?php echo $_smarty_tpl->tpl_vars['article']->value['summary'];?>
</p>
                </div>
                <?php
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_0_saved;
}
} else {
?>

                <!-- 如果都沒任何一筆就顯示下方文字 -->
                <h1>尚無內容</h1>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
</div>
</div><?php }
}
