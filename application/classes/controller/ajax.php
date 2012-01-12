<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends Controller {

	public function before()
	{
		parent::before();
		if ( ! $this->request->is_ajax())
		{
			$this->request->redirect('home');
		}
	}

	public function action_formulations()
	{

	}

}
