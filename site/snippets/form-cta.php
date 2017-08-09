<?php

use Uniform\Form;

    $form = new Form([
        'fullName' => [
            'rules' => ['required'],
            'message' => 'Please enter your name',
        ],
        'emailAddress' => [
            'rules' => ['required', 'email'],
            'message' => 'Please enter a valid email address',
        ],
        'cityOfResidence' => [
            // 'rules' => ['required'],
            // 'message' => 'Please supply a city for this address',
        ],
        'contactNumber' => [
            'rules' => ['required', 'num'],
            'message' => 'Please enter your contact number',
        ],
        'message' => [
            'rules' => ['required'],
            'message' => 'Please enter a message',
        ],
    ]);

    if (r::is('POST')) {
        $form->emailAction([
            'to' => '<?= $site->contactTo() ?>',
            'from' => '<?= $site->contactFrom() ?>',
            'subject' => 'New email from {fullName}',
            'replyTo' => '<?= $site->contactReply() ?>',
        ]);
        // if ($form->success()) {
        //   go('/thanks');
        // }
    }

 ?>
<div class="c-form-cta">
	<h2 class="c-form-cta__title">Get a Quote</h2>
	<?php if ($form->success()): ?>
		<div class="c-alert c-alert--success">
   		<i class="fa fa-check-circle" aria-hidden="true"></i> Success!
   	</div>
	<?php else: ?>
	   <?php snippet('errors', ['form' => $form]); ?>
	<?php endif; ?>
	<form method="post">
		<?= csrf_field() ?>
		<?= honeypot_field() ?>
		<input type="text" name="fullName" placeholder="Full name" class="c-form-input">
		<input type="text" name="emailAddress" placeholder="Email address" class="c-form-input">
		<input type="text" name="contactNumber" placeholder="Contact number" class="c-form-input">
		<input type="text" name="cityOfResidence" placeholder="City" class="c-form-input">
		<textarea name="message" placeholder="Your message" class="c-form-input"></textarea>
		<button type="submit" class="c-button c-button--primary c-button--large">Get free quote</button>
	</form>
</div>