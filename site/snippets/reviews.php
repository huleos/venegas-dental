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