<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Drug extends Controller_Admin_Template {

	public function action_index()
	{
		$view = View::factory('admin/drug/list');
		$view->drugs = ORM::factory('drug')->find_all();
		$this->template->content = $view;
	}

	public function action_add()
	{
		if ($this->request->post('submit')) {
			$drug = ORM::factory('drug')->save_all($this->request->post());
			Message::success('Drug created successfully');
		}

		$drug = ORM::factory('drug');
		$view = View::factory('admin/drug/edit');
		$view->drug = $drug->defaults();
		$view->labels = $drug->all_labels();
		$view->categories = ORM::factory('category')->get_keyed();

		$this->template->content = $view;
	}

	public function action_edit()
	{
		if ($this->request->post('submit')) {
			$drug = ORM::factory('drug', $this->request->param('id'))->save_all($this->request->post());
			Message::success('Drug updated successfully');
		}
		$drug = ORM::factory('drug', $this->request->param('id'));
		$drug->formulation_id = ORM::factory('formulation', $drug->formulation_id)->name;

		$view = View::factory('admin/drug/edit');
		$view->drug = $drug;
		$view->labels = $drug->all_labels();
		$view->categories = ORM::factory('category')->get_keyed();

		$this->template->content = $view;
	}

	public function action_import()
	{

		if ($this->request->post('submit')) {
			$count = Model_CSV::map_drugs($_FILES['csv']['tmp_name']);
			Message::success("Saved $count drugs");
		}

		$view = View::factory('admin/drug/import_csv');

		$this->template->content = $view;
	}

	public function action_delete() {
		ORM::factory('drug', $this->request->param('id'))->delete();
		$this->request->redirect('admin/drug/index');
	}
}
