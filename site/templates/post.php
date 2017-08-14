<?php snippet('header') ?>

<section class="o-container--md u-pt4 u-pb4">
	<article class="c-article">
		<?php if($image = $page->coverImage()->toFile()): ?>
			<img src="<?= $image->url() ?>" alt="<?= $page->title() ?>" >
		<?php endif ?>
		<div class="c-article__content">
			<h1 class="c-article__title"><?= $page->title() ?></h1>
			<time><?= $page->date('F jS, Y') ?></time>
			<?= $page->text()->kirbytext() ?>
		</div>
	</article>
</section>

<?php snippet('footer') ?>