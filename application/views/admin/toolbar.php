<ul id="toolbar">
	<li><?php echo Model_HTML::anchor_active('/','Home'); ?></li>
	<li><?php echo Model_HTML::anchor_active('admin/dashboard','Dashboard'); ?></li>
	<li><?php echo Model_HTML::anchor_active('admin/category','Categories'); ?></li>
	<li><?php echo Model_HTML::anchor_active('admin/drug','Drugs'); ?></li>
	<li><?php echo Model_HTML::anchor_active('admin/user','Users'); ?></li>
	<li class="logout"><?php echo Model_HTML::anchor_active('user/logout','Logout'); ?></li>
</ul>
