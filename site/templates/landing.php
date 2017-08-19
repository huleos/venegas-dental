<?php snippet('header') ?>

<!-- Cover with Form Snippet -->
<div class="o-container--full u-px0">
	<div class="o-flex o-flex--justify">
		<div class="c-cover"></div>
		<?php snippet('form-cta') ?>
		<div class="c-hero">
			<?php if($page->isHomePage()): ?>
			<h1 class="c-hero__text"><?= $page->coverText() ?></h1>
			<?php else: ?>
			<h2 class="c-hero__text"><?= $page->coverText() ?></h2>
			<?php endif ?>
		</div>
	</div>
</div>
<!-- /Cover with Form Snippet -->

<section class="o-container--md u-pt4">
	<h1 class="u-mb2"><?= $page->title() ?></h1>
	<?= $page->text()->kirbytext() ?>
</section>

<?php snippet('reviews') ?>
<?php snippet('footer') ?>