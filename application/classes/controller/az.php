<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Az extends Controller_Template {

	public function action_index()
	{
    $view = View::factory('az');
    $this->template->home = FALSE;
    $this->template->title = 'Αναζήτηση Α - Z | PharmInfo - Οδηγός Φαρμάκων';
    
    $this->template->content = $view;
	}

}
