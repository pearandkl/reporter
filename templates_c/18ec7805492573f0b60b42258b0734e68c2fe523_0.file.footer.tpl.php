<?php
/* Smarty version 3.1.30, created on 2017-11-04 05:59:09
  from "D:\qmo\UniServerZ\www\reporter\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fd572d056f08_50568295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18ec7805492573f0b60b42258b0734e68c2fe523' => 
    array (
      0 => 'D:\\qmo\\UniServerZ\\www\\reporter\\footer.tpl',
      1 => 1509767884,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fd572d056f08_50568295 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/popper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>


<!-- 文件載入 -->
<?php echo '<script'; ?>
>
    $(document).ready(function () {

        // var txt = ['你好', '大家好', '歡迎光臨'];
        // $('title').text(txt[Math.floor(Math.random() * txt.length)]);

        var images = ['pic1.jpg', 'pic2.jpg', 'pic3.jpg', 'pic4.jpg', 'pic5.jpg']
        $('.img-container').css({ 'background-image': 'url(images/' + images[Math.floor(Math.random() * images.length)] + ')' });

        $('.img-container').css('width', $(window).width());
        $('.img-container').css('height', $(window).height());
    });

<?php echo '</script'; ?>
>

<!-- 視窗改變 -->
<?php echo '<script'; ?>
>
    $(window).resize(function () {
        $('.img-container').css('width', $(window).width());
        $('.img-container').css('height', $(window).height());
    });

<?php echo '</script'; ?>
>

<!-- 假文產生器 -->
<?php echo '<script'; ?>
 src="http://more.handlino.com/javascripts/moretext-1.2.js" type="text/javascript"><?php echo '</script'; ?>
><?php }
}
