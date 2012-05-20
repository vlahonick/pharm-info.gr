<p>Successful Login as <?php echo HTML::chars($user->username); ?>.</p>

<ul class="actions">
  <?php if ($is_admin) : ?>
  <li><?php echo HTML::anchor('admin/drug/add', 'New Entry');?></li>
  <li><?php echo HTML::anchor('admin/drug/import', 'Import CSV File');?></li>
  <li><?php echo HTML::anchor('admin/user/add', 'New User');?></li>
  <li><?php echo HTML::anchor('admin/category/add', 'New Category');?></li>
  <?php endif; ?>
  <li><?php echo HTML::anchor('user/logout', 'Logout');?></li>
</ul>

