<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Helpus extends Controller_Template {

	public function action_index()
	{
		$view = View::factory('helpus');
		$this->template->home = FALSE;
		$this->template->title = 'Βοηθήστε μας | PharmInfo - Οδηγός Φαρμάκων';

		$this->template->content = $view;
	}

}
