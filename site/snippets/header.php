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

  <?php if ($page->template() == 'post'): ?><!-- Start OG -->
  <meta property="og:type" content="article" />
  <meta property="og:title" content="<?= ($page->metaTitle() != '') ? $page->metaTitle() : $site->title() ?>"/>
  <meta property="og:description" content="<?= ($page->metaDescription() != '') ? $page->metaDescription() : $site->description() ?>" />
  <meta property="og:url" content="<?= $page->url() ?>"/>
  <meta property="og:image" content="<?= $page->coverImage()->toFile()->url() ?>"/>
  <meta property="fb:admins" content="702171953" />

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@huleos7">
  <meta name="twitter:url" content="<?= $page->url() ?>">
  <meta name="twitter:title" content="<?= ($page->metaTitle() != '') ? $page->metaTitle() : $site->title() ?>">
  <meta name="twitter:description" content="<?= ($page->metaDescription() != '') ? $page->metaDescription() : $site->description() ?>">
  <meta name="twitter:image:src" content="<?= $page->coverImage()->toFile()->url() ?>">
  <?php endif ?><!-- End OG -->

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
