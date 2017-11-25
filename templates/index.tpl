<!doctype html>
<html lang="zh-Hant-TW">

    <head>
        {include file="header.tpl"}
    </head>

    <body>
        <!-- 導覽 -->
        {include file="nav.tpl"}
        <!-- 容器放底圖 -->
       
        <!-- 圖片下第二組文字用假文產生器 -->
        <!-- <div class="container">
            <h2 class="lipsum(1,10-15) pt-3"></h2>
            <p class="lipsum(3,20-50)"></p>
            <p class="lipsum(5,60-70)"></p>
            <p class="lipsum(7,30-50)"></p>
        </div> -->

        <!-- 自動載入 $op 對應的樣板檔 -->
        {include file="op_`$op`.tpl"}
        <!-- -->
        {include file="footer.tpl"}

    </body>

</html>