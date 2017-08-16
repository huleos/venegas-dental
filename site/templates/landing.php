<?php snippet('header') ?>

<!-- Cover with Form Snippet -->
<div class="o-container--full u-px0">
	<div class="o-flex o-flex--justify">
	<?php snippet('cover') ?>
	<?php snippet('form-cta') ?>
	</div>
</div>
<!-- /Cover with Form Snippet -->

<section class="o-container--md u-pt4">
	<h1 class="u-mb2"><?= $page->title() ?></h1>
	<?= $page->text()->kirbytext() ?>
</section>

<?php snippet('reviews') ?>
<?php snippet('footer') ?>