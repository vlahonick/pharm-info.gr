<?php echo Form::open(NULL, array('enctype' => 'multipart/form-data')); ?>

<div class="form-item">
	<?php echo Form::input('csv', '', array('type' => 'file', 'id' => 'image')); ?>
</div>

<div class="form-item">
	<?php echo form::submit('submit', 'Import') ?>
</div>

<?php echo form::close() ?>
