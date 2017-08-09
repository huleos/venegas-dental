<?php if($alert): ?>
    <?php foreach($alert as $message): ?>
      <div class="c-alert c-alert--danger">
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <?= html($message) ?>
      </div>
    <?php endforeach ?>
<?php endif ?>