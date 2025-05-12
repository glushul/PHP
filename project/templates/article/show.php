<?php require(dirname(__DIR__).'/header.php'); ?>
<article>
    <h1><?=$article->getName()?></h1>
    <div class="meta">
        Опубликовано <?=$article->getCreatedAt()?> автором <?=$article->getAuthor()->getName()?>
    </div>
    <p><?=$article->getText()?></p>
</article>
<?php require(dirname(__DIR__).'/footer.php'); ?>