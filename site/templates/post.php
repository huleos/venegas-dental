<?php snippet('header') ?>

<section class="o-container--sm u-pt4 u-pb4">
	<article class="c-article c-article--single">
		<?php if($image = $page->coverImage()->toFile()): ?>
		<div class="c-article__img">
			<img src="<?= $image->url() ?>" alt="<?= $page->title() ?>" >
		</div>
		<?php endif ?>
		<div class="c-article__content">
			<h1 class="c-article__title"><?= $page->title() ?></h1>
			<div class="c-article__meta">
				<time><?= $page->date('F jS, Y') ?></time>
			</div>
			<?= $page->text()->kirbytext() ?>
		</div>
	</article>
</section>

<?php snippet('footer') ?>