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
      <nav class="c-header--navigation o-flex o-flex--center o-flex--middle">
        <a href="" class="c-header--navigation__link">About</a>
        <a href="" class="c-header--navigation__link">Contact</a>
        <a href="#" class="c-button c-button--primary c-header__cta">Call to action</a>
      </nav>
    </div>
  </div>
</header>
