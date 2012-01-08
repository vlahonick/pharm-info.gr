<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_User extends Controller_Admin_Template {

	public function action_add()
	{
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
		$view->messages = Message::display();
		$this->template->content = $view;
	}
}
