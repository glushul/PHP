<?php require(dirname(__DIR__).'/header.php'); ?>
<article>
    <h1><?=$article['name']?></h1>
    <div class="meta">
        Опубликовано <?=$article['created_at']?> автором <?=$article['author_id']?>
    </div>
    <p><?=$article['text']?></p>
</article>
<?php require(dirname(__DIR__).'/footer.php'); ?>