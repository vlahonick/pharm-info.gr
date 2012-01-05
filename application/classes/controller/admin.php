<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller {

	public function before()
	{
		parent::before();
		if ( ! Auth::instance()->logged_in('admin'))
		{
			$this->request->redirect('user');
		}
	}

	public function action_add()
	{
		switch ($this->request->param('id')) {

			case 'user':
				if ($this->request->post('submit')) {
					$user = ORM::factory('user');
					$user->username = $this->request->post('username');
					$user->email = $this->request->post('email');
					$password = Text::random();
					$user->password = $password;
					$user->save();
					Message::success('User created with password: '.$password);
					// Add roles
					foreach ($this->request->post('roles') as $role_id) {
						$user->add('roles', ORM::factory('role')->where('id', '=', $role_id)->find());
					}
				}
				$results = ORM::factory('role')->find_all();
				foreach ($results as $role) {
					$roles[$role->id] = $role->name;
				}
				$view = View::factory('admin/user');
				$view->user = ORM::factory('user');
				$view->roles = isset($roles) ? $roles : array();
				break;

			case 'drug':

				if ($this->request->post('submit')) {
					// First create/save the Formulation if not already exists
					$formulation = ORM::factory('formulation')
						->where('name', '=', $this->request->post('formulation_id'))
						->find();

					if ( ! $formulation->id) {
						$formulation = ORM::factory('formulation');
						$formulation->name = $this->request->post('formulation_id');
						$formulation->save();
					}

					$drug = ORM::factory('drug');
					$drug->values($this->request->post());
					$drug->formulation_id = $formulation->id;
					$drug->save();
					Message::success('Drug created successfully');
					// Add categories
					foreach ($this->request->post('categories') as $category_id) {
						$drug->add('categories', ORM::factory('category')->where('id', '=', $category_id)->find());
					}
					// Add extra_formulations
					$extra_formulations = explode(',', $this->request->post('formulations'));
					foreach ($extra_formulations as $formulation_name) {
						$drug->add('formulations', ORM::factory('formulation')->where('name', '=', $formulation_name)->find());
					}
				}
				$category = ORM::factory('category');
				$formulation = ORM::factory('formulation');
				$drug = ORM::factory('drug');

				$results = $category->find_all();
				foreach ($results as $category) {
					$categories[$category->id] = $category->name;
				}

				$labels = array_merge($drug->labels(), $category->labels());
				// Formulations and categories has the same field name in database
				// so we have to seperate them before merging the rest lablels.
				$labels['category_name'] = $labels['name'];
				$labels = array_merge($labels, $formulation->labels());

				$view = View::factory('admin/drug');
				$view->drug = $drug;
				$view->labels = $labels;
				$view->categories = isset($categories) ? $categories : array();
				break;
		}
		$view->messages = Message::display();
		$this->response->body($view);
	}

}
