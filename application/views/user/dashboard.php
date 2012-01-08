<p>Hello <?php echo HTML::chars($user->username); ?></p>

<ul class="actions">
  <?php if ($is_admin) : ?>
  <li><?php echo HTML::anchor('admin/drug/add', 'Add drug entry');?></li>
  <li><?php echo HTML::anchor('admin/drug/import', 'Import drugs from csv file');?></li>
  <li><?php echo HTML::anchor('admin/user/add', 'Add user');?></li>
  <?php endif; ?>
  <li><?php echo HTML::anchor('user/logout', 'Logout');?></li>
</ul>

