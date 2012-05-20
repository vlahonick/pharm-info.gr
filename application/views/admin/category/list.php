<ul id="actions">
	<li><?php echo HTML::anchor('admin/category/add', 'Add new'); ?></li>
</ul>

<table>
	<thead>
		<th>ID</th>
		<th>Name</th>
		<th>Operations</th>
	</thead>
	<?php foreach ($categories as $category) : ?>
		<tr>
			<td><?php print $category->id;?></td>
			<td><?php print $category->name;?></td>
			<td>
				<?php echo HTML::anchor('admin/category/edit/'.$category->id, 'edit'); ?> |
				<?php echo HTML::anchor('admin/category/delete/'.$category->id, 'delete'); ?>
			</td>
		</tr>
	<?php endforeach; ?>
</table>
