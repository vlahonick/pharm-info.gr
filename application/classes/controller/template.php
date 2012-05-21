<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Template extends Kohana_Controller_Template {

	public function before()
	{
		parent::before();

		$this->template->toolbar = Auth::instance()->logged_in('admin') ? View::factory('admin/toolbar') : FALSE;
	}


	public function after()
	{
		// Assign the flash messages variable
		$this->template->messages = Message::display();

		parent::after();
	}

} // End Controller_Template
