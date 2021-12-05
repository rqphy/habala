<?php
$posts = $data;

if ($posts)
{
	foreach ($posts as $post)
	{
		?>
		<article>
			<p><?= $post['title'] ?></p>
			<img src="<?= $post['image_url'] ?>" alt="<?= $post['title'] ?>">
			<p><?= $post['content'] ?></p>
			<p><?= $post['author_id'] ?></p>
			<p><?= $post['date'] ?></p>
		</article>
		<?php
	}
}