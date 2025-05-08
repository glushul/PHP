<?php require(dirname(__DIR__).'/header.php'); ?>
<?php foreach($articles as $article):?>
<article>
    <a class="title" href="<?=$_SERVER['REQUEST_URI']?>article/<?=$article['id']?>"><?=$article['name'];?></a>
    <div class="meta">Published on <?=$article['created_at'];?> by <?=$article['author_id'];?></div>
    <p><?=$article['text'];?></p>
</article>
<?php endforeach?>
<?php require(dirname(__DIR__).'/footer.php'); ?>