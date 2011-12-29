<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Categories extends Controller_Template {

	public function action_index()
	{
    $view = View::factory('categories');
    $this->template->home = FALSE;
    $this->template->title = 'Κατηγορίες | PharmInfo - Οδηγός Φαρμάκων';
    
    $this->template->content = $view;
	}

}
