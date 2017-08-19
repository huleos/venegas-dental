<div class="c-about o-container--full u-px0">
	<div class="o-container o-flex o-flex--justify o-flex--middle">
		<div class="c-about__doctor u-px1">
			<img class="c-about__doctor--image" src="<?= url('assets/images/dr-venegas.jpg') ?>" alt="<?= $site->title() ?>">
		</div>
		<div class="c-about__text u-px1 u-py1">
			<div class="c-about__certifications o-flex o-flex--left o-flex--middle">
				<div class="c-about__certifications-item">
					<img src="<?= url('assets/images/ada-venegas.png') ?>" alt="<?= $site->title() ?>">
				</div>
				<div class="c-about__certifications-item">
					<img src="<?= url('assets/images/aao-venegas.png') ?>" alt="<?= $site->title() ?>">
				</div>
			</div>
			<p><?= $site->aboutUs()->kirbytext() ?></p>
			<!-- <a href="" class="c-button c-button--primary">Read more...</a> -->
		</div>
	</div>
</div>