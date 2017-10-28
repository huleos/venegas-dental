<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?= ($page->metaTitle() != '') ? $page->metaTitle() : $site->title() ?></title>
  <meta name="description" content="<?= ($page->metaDescription() != '') ? $page->metaDescription() : $site->description() ?>" />
  <link rel="canonical" href="<?= $page->url() ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <?= css('assets/css/style.css') ?>
</head>
<body>

<header class="c-header o-container--full">
  <div class="o-flex o-flex--wrap o-flex--justify o-flex--middle">
    <div class="c-header--logo">
      <a href="<?= url() ?>">
        <img src="<?= url('assets/images/logo.png') ?>" alt="<?= $site->title() ?>">
      </a>
    </div>
    <?php snippet('header-nav') ?>
  </div>
</header>
