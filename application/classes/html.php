<?php defined('SYSPATH') or die('No direct script access.');

class HTML extends Kohana_HTML {

	public static function anchor($uri, $title = NULL, array $attributes = NULL, $protocol = NULL, $index = TRUE)
	{

		if (($uri == '/' AND $_SERVER['PHP_SELF'] == '/index.php') OR strpos($_SERVER['PHP_SELF'], $uri))
		{
			return parent::anchor(url::base().$uri, $title, array('class'=> 'active'));
		}
		else
		{
			return parent::anchor(url::base().$uri, $title);
		}

	}
}
