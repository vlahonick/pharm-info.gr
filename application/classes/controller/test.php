<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Test extends Controller_Template {

	public function action_index()
	{
    $view = View::factory('test');
    $this->template->home = FALSE;
    $this->template->title = 'Test Entry - PharmInfo';
    
    $this->template->content = $view;
	}

}
