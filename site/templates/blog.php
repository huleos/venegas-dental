<?php snippet('header') ?>

<section class="o-container--md u-pt4 u-pb4">
	<?php foreach($articles as $article): ?>
	<article class="c-article">
		<?php if($image = $article->coverImage()->toFile()): ?>
			<a href="<?= $article->url() ?>" class="c-article__img">
				<img src="<?= $image->url() ?>" alt="<?= $article->title() ?>" >
			</a>
		<?php endif ?>
		<div class="c-article__content">
			<h2 class="c-article__title">
				<a href="<?= $article->url() ?>"><?= $article->title() ?></a>
			</h2>
			<time><?= $article->date('F jS, Y') ?></time>
			<p><?= $article->text()->excerpt(50, 'words') ?></p>
		</div>
	</article>
	<?php endforeach ?>
</section>

<?php snippet('pagination') ?>

<?php snippet('footer') ?>