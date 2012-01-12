<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Drug extends Controller_Template {

	public function action_index()
	{
		$drug = ORM::factory('drug', $this->request->param('id'));
		$view = View::factory('drug');
		$view->drug = $drug;
		$this->template->title = $drug->substance.' - PharmInfo';
		$this->template->content = $view;

	}

}
