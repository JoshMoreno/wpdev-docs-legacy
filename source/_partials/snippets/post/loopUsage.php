<?php /** @var \WPDev\Models\Post[] $Posts */ ?>
<?php foreach ($Posts as $post) : ?>
	<div>
		<?= $post->featuredImage('medium'); ?>
		<h2><?= $post->title(); ?></h2>
		<div><?= $post->excerpt(); ?></div>
		<a href="<?= $post->url(); ?>">Read More</a>
	</div>
<?php endforeach; ?>