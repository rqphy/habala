<?php
$posts = $data;

echo __DIR__ . '/../../static/images/';

if ($posts)
{
	foreach ($posts as $post)
	{
		?>
		<article style="border: 1px solid tomato; margin-top: 20px;">
			<p><?= $post['title'] ?></p>
			<img src="../../public/images/<?= $post['image_url'] ?>" alt="<?= $post['title'] ?>">
			<p><?= $post['content'] ?></p>
			<p><?= $post['author_id'] ?></p>
			<p><?= $post['date'] ?></p>
		</article>
		<?php
	}
}