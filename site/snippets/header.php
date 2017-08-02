<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
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
