<?php defined('SYSPATH') or die('No direct script access.');

class Model_HTML extends Model {

	public static function anchor_active($uri, $title = NULL, array $attributes = NULL, $protocol = NULL, $index = TRUE)
	{

    if (strpos($_SERVER['PHP_SELF'], $uri))
    {
      return HTML::anchor(url::base().$uri, $title, array('class'=> 'active'));
    }
    else
    {
      return HTML::anchor(url::base().$uri, $title);
    }
    
	}
}
