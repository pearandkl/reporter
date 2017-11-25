<div class="img-container">
        <!-- 再用DIV放文字 -->
        <div class="container">
        </div>
</div>

<div class="container">
        <h1 class="my-3 text-center">最新文章</h1>
        <div class="row">
                {foreach $all as $article}
                <div class="col-sm-4">
                        {assign var="cover" value="uploads/thumb_`$article.sn`.png"}
                        {if file_exists($cover)}
                        <!--                                                            rounded將圖片導圓角 -->
                                <img src="{$cover}" alt="{$article.title}" class="rounded cover">
                        {else}
                        <!-- 如果沒圖片就用假圖顯示 -->
                                <img src="https://picsum.photos/400/300?image={$article@index}" alt="{$article.title}" class="rounded cover">                        
                        {/if}
                        <h3><a href="index.php?sn={$article.sn}">{$article.title}</a></h3>
                        <p>{$article.summary}</p>
                </div>
                {foreachelse}
                <!-- 如果都沒任何一筆就顯示下方文字 -->
                <h1>尚無內容</h1>
                {/foreach}</div>
</div>