<?php snippet('header') ?>

  <main class="main" role="main">

    <h1><?php echo $page->title()->html() ?></h1>

    <form method="post">
		<input type="website" name="website" class="uniform__potty">
			
	   <?php snippet('form-errors') ?>

    <input type="text" name="fullName" placeholder="Full name" class="c-form-input">
		<input type="text" name="emailAddress" placeholder="Email address" class="c-form-input">
		<input type="text" name="contactNumber" placeholder="Contact number" class="c-form-input">
		<input type="text" name="cityOfResidence" placeholder="City" class="c-form-input">
		<textarea name="message" placeholder="Your message" class="c-form-input"></textarea>
		<button type="submit" name="submit" value="submit" class="c-button c-button--primary c-button--large">Get free quote</button>

    </form>

  </main>

<?php snippet('footer') ?>