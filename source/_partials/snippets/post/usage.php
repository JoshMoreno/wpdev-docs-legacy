<?php /** @var \WPDev\Models\Post $Post */ ?>
<h1>
	<a href="<?= $Post->url(); ?>">
		<?= $Post->title(); ?>
	</a>
</h1>
<?= $Post->content(); ?>