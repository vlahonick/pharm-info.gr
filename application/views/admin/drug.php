<?php echo $messages; ?>

<?php echo form::open(); ?>

<div class="form-item">
	<?php echo form::label('substance_en', $labels['substance_en']); ?>
	<?php echo form::input('substance_en', $drug->substance_en, array('id' => 'substance_en')); ?>
</div>

<div class="form-item">
	<?php echo form::label('substance', $labels['substance']); ?>
	<?php echo form::input('substance', $drug->substance, array('id' => 'substance')); ?>
</div>

<div class="form-item">
	<?php echo form::label('categories', $labels['category_name']); ?>
	<?php echo form::select('categories[]', $categories, $drug->categories, array('multiple' => 'multiple', 'id' => 'categories')); ?>
</div>

<div class="form-item">
	<?php echo form::label('chemical_info', $labels['chemical_info']); ?>
	<?php echo form::input('chemical_info', $drug->chemical_info, array('id' => 'chemical_info')); ?>
</div>

<div class="form-item">
	<?php echo form::label('formulation_id', $labels['formulation_id']); ?>
	<?php echo form::input('formulation_id', $drug->formulation_id, array('id' => 'formulation_id')); ?>
</div>

<div class="form-item">
	<?php echo form::label('formulations', $labels['name']); ?>
	<?php echo form::input('formulations', $drug->formulations, array('id' => 'formulations')); ?>
	<div class="description">Εισάγετε σκευάσματα χωρισμένα με κόμα</div>
</div>

<div class="form-item">
	<?php echo form::label('forms', $labels['forms']); ?>
	<?php echo form::input('forms', $drug->forms, array('id' => 'forms')); ?>
</div>

<div class="container">
	<h4><?php print $labels['profile']; ?></h4>
	<div class="form-item">
		<?php echo form::label('profile', 'Κίνδυνος υπερδοσολογίας'); ?>
		<?php echo form::select('profile[overdose]', array(
			'low' => 'Χαμηλός',
			'medium' => 'Μέτριος',
			'high' => 'Υψηλός',
		), $drug->profile['overdose'], array('id' => 'profile-overdose')); ?>
	</div>

	<div class="form-item">
		<?php echo form::label('profile', 'Κίνδυνος παρενεργειών'); ?>
		<?php echo form::select('profile[side_effects]', array(
			'low' => 'Χαμηλός',
			'medium' => 'Μέτριος',
			'high' => 'Υψηλός',
		), $drug->profile['side_effects'], array('id' => 'profile-side_effects')); ?>
	</div>

	<div class="form-item">
		<?php echo form::label('profile', 'Κίνδυνος αλληλεπιδράσεων'); ?>
		<?php echo form::select('profile[interactions]', array(
			'low' => 'Χαμηλός',
			'medium' => 'Μέτριος',
			'high' => 'Υψηλός',
		), $drug->profile['interactions'], array('id' => 'profile-interactions')); ?>
	</div>
</div>

<div class="form-item">
	<?php echo form::label('action_mechanism', $labels['action_mechanism']); ?>
	<?php echo form::textarea('action_mechanism', $drug->action_mechanism, array('id' => 'action_mechanism')); ?>
</div>

<div class="form-item">
	<?php echo form::label('indications', $labels['indications']); ?>
	<?php echo form::textarea('indications', $drug->indications, array('id' => 'indications')); ?>
</div>

<div class="form-item">
	<?php echo form::label('precautions', $labels['precautions']); ?>
	<?php echo form::textarea('precautions', $drug->precautions, array('id' => 'precautions')); ?>
</div>

<div class="form-item">
	<?php echo form::label('side_effects', $labels['side_effects']); ?>
	<?php echo form::textarea('side_effects', $drug->side_effects, array('id' => 'side_effects')); ?>
</div>

<div class="form-item">
	<?php echo form::label('interactions', $labels['interactions']); ?>
	<?php echo form::textarea('interactions', $drug->interactions, array('id' => 'interactions')); ?>
</div>

<div class="form-item">
	<?php echo form::label('diet_parameters', $labels['diet_parameters']); ?>
	<?php echo form::textarea('diet_parameters', $drug->diet_parameters, array('id' => 'diet_parameters')); ?>
</div>

<div class="form-item">
	<?php echo form::label('dosage', $labels['dosage']); ?>
	<?php echo form::textarea('dosage', $drug->dosage, array('id' => 'dosage')); ?>
</div>

<div class="form-item">
	<?php echo form::label('action', $labels['action']); ?>
	<?php echo form::textarea('action', $drug->action, array('id' => 'action')); ?>
</div>

<div class="form-item">
	<?php echo form::label('overdose', $labels['overdose']); ?>
	<?php echo form::textarea('overdose', $drug->overdose, array('id' => 'overdose')); ?>
</div>

<div class="form-item">
	<?php echo form::label('chronic_usage', $labels['chronic_usage']); ?>
	<?php echo form::textarea('chronic_usage', $drug->chronic_usage, array('id' => 'chronic_usage')); ?>
</div>

<div class="form-item">
	<?php echo form::label('attention_points', $labels['attention_points']); ?>
	<?php echo form::textarea('attention_points', $drug->attention_points, array('id' => 'attention_points')); ?>
</div>

<div class="form-item">
	<?php echo form::label('storage', $labels['storage']); ?>
	<?php echo form::textarea('storage', $drug->storage, array('id' => 'storage')); ?>
</div>

<div class="form-item">
	<?php echo form::submit('submit', 'Save') ?>
</div>
<?php echo form::close() ?>
