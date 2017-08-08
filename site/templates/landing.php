<?php snippet('header') ?>

<!-- Cover with Form Snippet -->
<div class="o-container--full u-px0">
	<div class="o-flex o-flex--justify">
	<?php snippet('cover') ?>
	<?php snippet('form-cta') ?>
	</div>
</div>
<!-- /Cover with Form Snippet -->
<?php snippet('about') ?>

<section class="o-container--md u-pt4">
	<div class="o-flex">
	<?= $page->text()->kirbytext() ?>
	</div>
</section>

<?php snippet('reviews') ?>
<?php snippet('footer') ?>