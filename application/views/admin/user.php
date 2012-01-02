<?php echo $messages; ?>

<?php echo form::open(); ?>

<div class="contact-form">
	<?php echo form::label('username', 'Username:') ?>
	<?php echo form::input('username', $user['username'], array('id' => 'username')) ?>
</div>
<div class="contact-form">
	<?php echo form::label('email', 'Email:') ?>
	<?php echo form::input('email', $user['email'], array('id' => 'email')) ?>
</div>
<div class="contact-form">
	<?php echo form::label('roles', 'Roles:') ?>
	<?php echo form::select('roles[]', (array) $roles, $user['roles'], array('multiple' => 'multiple', 'id' => 'roles')) ?>
</div>
<div class="contact-form">
	<?php echo form::submit('submit', 'Save') ?>
</div>
<?php echo form::close() ?>
