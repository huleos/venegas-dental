<?php if ($articles->pagination()->hasPages()): ?>
<ul class="c-pagination">  
  <?php if($articles->pagination()->hasNextPage()): ?>
  <li><a class="c-pagination__prev" href="<?= $articles->pagination()->nextPageURL() ?>">Older posts</a></li>
  <?php endif ?>

  <?php foreach($articles->pagination()->range(5) as $paging): ?>
  <li><a href="<?= $articles->pagination()->pageURL($paging); ?>"><?= $paging; ?></a></li>
  <?php endforeach ?>

  <?php if($articles->pagination()->hasPrevPage()): ?>
  <li><a class="c-pagination__next" href="<?= $articles->pagination()->prevPageURL() ?>">Newer posts</a></li>
  <?php endif ?>
</ul>
<?php endif; ?>