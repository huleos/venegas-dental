<div class="c-cover">
	<div class="c-cover__intro">
		<?php if($page->isHomePage()): ?>
		<h1 class="c-cover__text"><?= $page->coverText() ?></h1>
		<?php else: ?>
		<h2 class="c-cover__text"><?= $page->coverText() ?></h2>
		<?php endif ?>
	</div>
</div>