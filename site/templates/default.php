<?php snippet('header') ?>

<!-- Cover with Form Snippet -->
<div class="o-container--full u-px0">
	<div class="o-flex o-flex--justify">
	<?php snippet('cover') ?>
	<?php snippet('form-cta') ?>
	</div>
</div>
<!-- /Cover with Form Snippet -->

<h1><?php echo $page->title()->html() ?></h1>
<?= $page->text()->kirbytext() ?>

<?php snippet('footer') ?>