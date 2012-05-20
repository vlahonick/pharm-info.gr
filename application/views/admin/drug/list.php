<table>
	<thead>
		<th>ID</th>
		<th>Substance</th>
		<th>Operations</th>
	</thead>
	<?php foreach ($drugs as $drug) : ?>
		<tr>
			<td><?php print $drug->id;?></td>
			<td><?php print $drug->substance;?></td>
			<td>
				<?php echo HTML::anchor('drug/'.$drug->id, 'view'); ?> |
				<?php echo HTML::anchor('admin/drug/edit/'.$drug->id, 'edit'); ?> |
        <?php echo HTML::anchor('admin/drug/delete/'.$drug->id, 'delete'); ?>
			</td>
		</tr>
	<?php endforeach; ?>
</table>
