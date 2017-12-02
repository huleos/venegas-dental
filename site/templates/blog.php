<?php snippet('header') ?>

<section class="o-container--md u-pt4 u-pb4">
	<h1 class="u-mb2"><?= $page->title() ?></h1>
	<?php foreach($articles as $article): ?>
	<a href="<?= $article->url() ?>" class="c-article">
		<?php if($image = $article->coverImage()->toFile()): ?>
			<div class="c-article__img">
				<img src="<?= $image->url() ?>" alt="<?= $article->title() ?>" >
			</div>
		<?php endif ?>
		<div class="c-article__content">
			<h2 class="c-article__title">
				<?= $article->title() ?>
			</h2>
			<div class="c-article__meta">
				<time><?= $article->date('F jS, Y') ?></time>
			</div>
			<p><?= $article->text()->excerpt(50, 'words') ?></p>
		</div>
	</a>
	<?php endforeach ?>
</section>

<?php snippet('pagination') ?>

<?php snippet('footer') ?>