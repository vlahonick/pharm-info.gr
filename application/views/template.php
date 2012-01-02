<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title><?php print $title ?></title>
		<meta name="description" content="PharmInfo - Οδηγός Φαρμάκων" />
		<meta name="keywords" content="PharmInfo, Οδηγός, Φάρμακα" />
		<meta name="author" content="vlahonick & paris" />
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="<?php echo url::base(); ?>css/style.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo url::base(); ?>css/jquery-ui.css" type="text/css" />
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
		<script type="text/javascript" src="<?php echo url::base(); ?>scripts/PharmInfo.js"></script>
	</head>
	<body>
		<div id="wrapper">

			<?php if ( ! isset($home)) :?>

			<div id="header">
				<a href="<?php echo url::base(); ?>">
					<img src="<?php echo url::base(); ?>images/logo_small.jpg" alt="InfoPharm" id="logo_small" />
				</a>
				<div id="search">
					Αναζήτηση:
					<select>
						<option value="">Δρ. Ουσίες Αλφαβητικά</option>
						<option value="">Δρ. Ουσίες Αλφαβητικά (Αγγλικά)</option>
						<option value="">Εμπορικές Ονομασίες</option>
						<option value="">Φαρμακολογική Κατηγορία</option>
					</select>
					<div class="marginb5"></div>
					<input type="text" name="Search Bar" id="sb" />
					<input type="image" src="<?php echo url::base(); ?>images/search.png" id="simg" />
				</div>
			</div> <!-- end header-->
			<?php endif; ?>

				<?php print $content; ?>

			<div id="footer">
				<?php echo Model_HTML::anchor_active('/','Home'); ?> |
				<?php echo Model_HTML::anchor_active('about','About'); ?> |
				<?php echo Model_HTML::anchor_active('faq','FAQ'); ?> |
				<?php echo Model_HTML::anchor_active('disclaimer','Disclaimer'); ?> |
				<?php echo Model_HTML::anchor_active('helpus','Help Us'); ?> |
				<?php echo Model_HTML::anchor_active('contact','Contact'); ?>
			</div>
		</div> <!-- end wrapper -->

	</body>
</html>
