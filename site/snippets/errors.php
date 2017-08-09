<?php if (count($form->errors()) > 0): ?>
    <?php foreach ($form->errors() as $key => $error): ?>
      <div class="c-alert c-alert--danger">
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <?= implode('<br>', $error) ?>
      </div>
    <?php endforeach ?>
<?php endif ?>
