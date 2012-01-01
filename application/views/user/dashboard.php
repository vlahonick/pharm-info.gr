<p>Hello <?php echo HTML::chars($user->username); ?></p>

<ul class="actions">
  <?php if ($is_admin) : ?>
  <li><?php echo HTML::anchor('admin/add/drug', 'Add drug entry');?></li>
  <li><?php echo HTML::anchor('admin/add/user', 'Add user');?></li>
  <?php endif; ?>
  <li><?php echo HTML::anchor('user/logout', 'Logout');?></li>
</ul>

