<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?= ($page->meta_title() != '') ? $page->meta_title() : $site->title() ?></title>
  <meta name="description" content="<?= ($page->meta_description() != '') ? $page->meta_description() : $site->description() ?>" />
  <link rel="canonical" href="<?= $page->url() ?>">
	<?= css('assets/css/bundle.css') ?>
</head>
<body>

<header class="c-header">
  <div class="o-container">
    <div class="o-flex o-flex--wrap o-flex--justify o-flex--middle">
      <div class="c-header--logo">
        <img src="<?= url('assets/images/logo.png') ?>" alt="">
      </div>
      <?php snippet('header-nav') ?>
    </div>
  </div>
</header>
