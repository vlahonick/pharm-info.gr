<?php echo form::open('user/login') ?>

  <?php echo form::label('username', 'Username') ?>

  <?php echo form::input('username', '', array('id' => 'username')) ?>

  <?php echo form::label('password', 'Password') ?>

  <?php echo form::password('password', '', array('id' => 'password')) ?>

  <?php echo form::label('submit', 'Hit me!') ?>

  <?php echo form::submit('submit', 'Login') ?>

<?php echo form::close() ?>
