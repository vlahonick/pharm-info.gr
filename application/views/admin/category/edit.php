<?php echo form::open(); ?>

<div class="form-item">
	<?php echo form::label('name', 'Name:') ?>
	<?php echo form::input('name', $category->name, array('id' => 'name')) ?>
</div>

<div class="form-item">
	<?php echo form::submit('submit', 'Save') ?>
</div>
<?php echo form::close() ?>
