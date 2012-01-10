<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="<?php echo url::base(); ?>css/admin.css" type="text/css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
	</head>
	<body>
		<?php print $content; ?>
		<script src="<?php echo url::base(); ?>scripts/tiny_mce/jquery.tinymce.js"></script>
		<script src="<?php echo url::base(); ?>scripts/pharminfo.admin.js"></script>
	</body>
</html>
