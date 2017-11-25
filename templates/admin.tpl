<!doctype html>
<html lang="zh-Hant-TW">

    <head>
        {include file="header.tpl"}
    </head>

    <body>
        <!-- 導覽 -->
        {include file="nav.tpl"}
        <!-- 容器放底圖 -->
        <div class="img-container">
            <!-- 再用DIV放文字 -->
            <div class="container">
                <!-- 自動載入 $op 對應的樣板檔 -->
                {include file="op_`$op`.tpl"}
            </div>
        </div>

        {include file="footer.tpl"}

    </body>

</html>