<?php snippet('insurers') ?>

<footer class="c-footer">
	<div class="c-footer--newsletter">
		<div class="o-container">
			<h3 class="c-footer--newsletter__title">Newsletter</h3>
			<p class="c-footer--newsletter__text">Join our newsletter and receive special offers</p>
  	</div>
  	<div class="o-container--sm">
  		<div class="o-flex o-flex--center">
  			<form action="" class="c-footer--form">
  				<input type="text" placeholder="Enter your email address" class="c-form-input">
  				<input class="c-button c-button--primary c-button--large" type="submit" value="Subscribe">
  			</form>
			</div>
  	</div>
	</div>
	<div class="c-footer--bottom">
		<div class="o-container">
			<div class="o-flex o-flex--justify o-flex--middle">
				<p class="c-footer__copy">&copy; <?= date("Y") ?> All Rights Reserved | Handmade by <a href="//huleos.com"><strong>huleos.com</strong></a></p>
				<nav class="c-footer--nav o-flex o-flex--center o-flex--middle">
					<a href="<?= url('terms-and-conditions') ?>" class="c-footer--nav__link" target="_blank">Terms & Conditions</a>
					<!-- <a href="" class="c-footer--nav__link">Privacy Policy</a> -->
				</nav>
			</div>
		</div>
	</div>
</footer>

	<?= js('assets/js/bundle.js') ?>
</body>
</html>