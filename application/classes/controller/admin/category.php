<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Category extends Controller_Admin_Template {

	public function action_add()
	{
		if ($this->request->post('submit')) {
			$category = ORM::factory('category');
			$category->values($this->request->post());
			$category->save();
			Message::success('Category created successfully');
		}
		$category = ORM::factory('category');
		$view = View::factory('admin/category');
		$view->category = $category;

		$view->messages = Message::display();
		$this->template->content = $view;

	}

}
