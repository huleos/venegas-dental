<nav class="c-header--navigation o-flex o-flex--center o-flex--middle">
  <!-- <a href="" class="c-header--navigation__link">About</a>
  <a href="" class="c-header--navigation__link">Contact</a> -->
  <div class="c-header__tel">Need Help? Call us Now <a href="tel:7605403899"><b>760 540 3899</b></a></div>
  <a href="<?= url('blog') ?>" class="c-header__link">Blog</a>
  <?php if($page->isVisible('price-list')): ?>
  <a href="<?= url('price-list') ?>" class="c-header__link">Price List</a>
	<?php endif ?>
</nav>