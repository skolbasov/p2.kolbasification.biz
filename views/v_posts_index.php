<?php foreach ($posts as $post): ?>

<form action='/posts/like/<?=$post['post_id']?>'>

<article>
<h1><?=$post['first_name']?> <?=$post['last_name']?> posted:</h1>
<h2><?=$post['title']?></h2>
<p><?=$post['content']?></p>
<time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
<?=Time::display($post['created'])?>
</time>
<p><?=$post['likes']?> liked</p>
</article>
    <input type='submit' value='Like it!' class="InputButton"><br>
   
</form>

<?php endforeach; ?>