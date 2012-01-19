<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Dashboard extends Controller_Admin_Template {

	public function action_index()
	{
		$view = View::factory('admin/dashboard');
		$view->drugs = ORM::factory('drug')->find_all();
		$this->template->content = $view;
	}
}
