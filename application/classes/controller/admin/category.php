<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Category extends Controller_Admin_Template {

	public function action_index()
	{
		$view = View::factory('admin/category/list');
		$view->categories = ORM::factory('category')->find_all();
		$this->template->content = $view;
	}

	public function action_add()
	{
		if ($this->request->post('submit')) {
			$category = ORM::factory('category');
			$category->values($this->request->post());
			$category->save();
			Message::success('Category created successfully');
		}
		$category = ORM::factory('category');
		$view = View::factory('admin/category/edit');
		$view->category = $category;

		$this->template->content = $view;
	}

	public function action_delete() {
		ORM::factory('category', $this->request->param('id'))->delete();
		$this->request->redirect('admin/category/index');
	}

}
