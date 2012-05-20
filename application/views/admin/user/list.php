<ul id="actions">
	<li><?php echo HTML::anchor('admin/user/add', 'Add new'); ?></li>
</ul>

<table>
	<thead>
		<th>ID</th>
		<th>Username</th>
		<th>Operations</th>
	</thead>
	<?php foreach ($users as $user) : ?>
		<tr>
			<td><?php print $user->id;?></td>
			<td><?php print $user->username;?></td>
			<td><?php print $user->email;?></td>
			<td>
				<?php echo HTML::anchor('admin/user/edit/'.$user->id, 'edit'); ?> |
				<?php echo HTML::anchor('admin/user/delete/'.$user->id, 'delete'); ?>
			</td>
		</tr>
	<?php endforeach; ?>
</table>
