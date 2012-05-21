<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Template extends Controller_Template {
	public $template = 'admin/template';

	public function before()
	{
		parent::before();
		if ( ! Auth::instance()->logged_in('admin'))
		{
			$this->request->redirect('user');
		}
	}

}
