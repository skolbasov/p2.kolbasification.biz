<?php foreach ($posts as $post): ?>

<article>
<h1><?=$post['first_name']?> <?=$post['last_name']?> posted:</h1>
<p><?=$post['content']?></p>
<time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
<?=Time::display($post['created'])?>
</time>
<p><?=$post['likes']?> liked</p>
<input type='button' value='Like!' class="InputButton" formaction="/posts/like/"<?=$post['post_id']?>>
</article>
<?php endforeach; ?>