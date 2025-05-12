<?php require(dirname(__DIR__).'/header.php'); ?>

<?php foreach($articles as $article): ?>
<article>
    <a class="title" href="<?=$_SERVER['REQUEST_URI']?>article/<?=$article->getId()?>"><?=$article->getName();?></a>
    <div class="meta">Published on <?=$article->getCreatedAt();?> by <?=$article->getAuthor()->getName();?></div>
    <p><?=$article->getText();?></p>
</article>
<?php endforeach ?>

<?php require(dirname(__DIR__).'/footer.php'); ?>
