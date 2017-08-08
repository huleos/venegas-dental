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

<div class="c-treatments o-container--full u-px0">
	<div class="o-container">
		<h2 class="c-treatments--title">Our Procedures</h2>
		<div class="o-flex">
			<?php foreach($page->treatments()->toStructure() as $item): ?>
			<div class="c-treatment__container u-px1">
				<div class="c-treatment__block">
					<h3 class="c-treatment__block--title"><?= $item->title() ?></h3>
					<p><?= excerpt($item->text(), 350) ?></p>
					<a href="">Read more...</a>
				</div>
			</div>
			<?php endforeach ?>
		</div>
	</div>
</div><!-- .c-treatments -->

<div class="c-city o-container--full u-px0">
	<div class="o-container">
		<div class="o-flex o-flex--middle">
				<div class="c-city__about u-px1">
					<h3 class="c-city__about--title"><?= $page->titleCity() ?></h3>
					<?= $page->aboutCity()->kirbytext() ?>
				</div>
				<div class="c-city__image u-px1">
					<?php $mexicaliImg = $page->imageCity()->toFile(); ?>
					<img src="<?= $mexicaliImg->url() ?>" alt="<?= $page->title() ?>">
				</div>
		</div>
	</div>
</div><!-- .c-city -->

<div class="c-reviews o-container--full u-px0">
	<div class="o-container">
		<h2 class="c-reviews--title">Reviews</h2>
		<div class="o-flex">
			<?php foreach($page->reviews()->toStructure() as $item): ?>
			<div class="c-review__container u-px1">
				<div class="c-review__block">
					<div class="c-review--info">
						<span class="c-review--info__name"><?= $item->name() ?></span>
						<span class="c-review--info__city"><?= $item->city() ?>, <?= $item->state() ?></span>
					</div>
						<div class="c-rating">
						<span class="c-rating__title">Rating </span>
						<?php $starNumber = $item->score()->int() ?>
						<?php for($x=1;$x<=$starNumber;$x++): ?>
							<i class="fa fa-star c-rating__star is-active" aria-hidden="true"></i>
						<?php endfor ?>
						<?php if(strpos($starNumber,'.')): $x++ ?>
							<i class="fa fa-star-half-o c-rating__star is-active"></i>
						<?php  endif ?>
						<?php while ($x<=5): $x++ ?>
							<i class="fa fa-star c-rating__star" aria-hidden="true"></i>
						<?php endwhile ?>
						</div>
					
					<p><?= excerpt($item->text(), 350) ?></p>
				</div>
			</div>
			<?php endforeach ?>
		</div>
	</div>
</div><!-- .c-reviews -->


<?= $page->text()->kirbytext() ?>

<?php snippet('footer') ?>