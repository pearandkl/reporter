<?php
/* Smarty version 3.1.30, created on 2017-11-11 02:10:14
from "D:\qmo\UniServerZ\www\reporter\signup.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array(
    'version'          => '3.1.30',
    'unifunc'          => 'content_5a065c0636b1c3_48868769',
    'has_nocache_code' => false,
    'file_dependency'  => array(
        '03abb0a5d50266c883a9563a9d42d596863c8848' => array(
            0 => 'D:\\qmo\\UniServerZ\\www\\reporter\\signup.tpl',
            1 => 1510365980,
            2 => 'file',
        ),
    ),
    'includes'         => array(
        'file:header.tpl' => 1,
        'file:footer.tpl' => 1,
    ),
), false)) {
    function content_5a065c0636b1c3_48868769(Smarty_Internal_Template $_smarty_tpl)
    {
        ?>
<!doctype html>
<html lang="zh-Hant-TW">

<head>
    <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
        ?>


</head>

<body>
    <!-- 容器放底圖 -->
    <div class="img-container">
        <!-- 再用DIV放文字 -->
        <div class="container">
            <!-- 導覽 -->
            <nav class="nav">
                <a href="index.php" class="nav-link text-white">首頁</a>
                <a href="index.php" class="nav-link text-white">編輯精選</a>
                <a href="index.php" class="nav-link text-white">街巷故事</a>
                <a href="index.php" class="nav-link text-white">市井觀點</a>
                <a href="index.php" class="nav-link text-white">私房知識塾</a>
                <a href="admin.php" class="nav-link text-white">管理</a>
            </nav>







        </div>
    </div>
    </div>





    </div>



    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
        ?>



    <?php echo '<script'; ?>
 src="js/signup.js">

    <?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
 src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $("#usersignup").validate({
            rules: {
                email: {
                    email: true,
                    required: true
                },
                password1: {
                    required: true,
                    minlength: 4
                },
                password2: {
                    equalTo: "#password1"
                }
            }
        });

    <?php echo '</script'; ?>
>


</body>

</html><?php }
}
