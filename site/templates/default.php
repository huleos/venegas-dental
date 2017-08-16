<?php snippet('header') ?>

<section class="o-container--md u-pt4 u-pb4">
	<h1 class="u-mb2"><?= $page->title() ?></h1>
	<?= $page->text()->kirbytext() ?>
</section>

<?php snippet('footer') ?>