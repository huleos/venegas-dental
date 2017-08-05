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

<div class="c-procedures o-container--full u-px0">
	<div class="o-container">
		<h2 class="c-procedures--title">Our Procedures</h2>
		<div class="o-flex">
			<?php foreach($page->procedures()->toStructure() as $item): ?>
			<div class="c-procedures__container u-px1">
				<div class="c-procedures__block">
					<h3 class="c-procedures__block--title"><?= $item->title() ?></h3>
					<p><?= excerpt($item->text(), 350) ?></p>
					<a href="">Read more...</a>
				</div>
			</div>
			<?php endforeach ?>
		</div>
	</div>
</div>

<?= $page->text()->kirbytext() ?>

<?php snippet('footer') ?>