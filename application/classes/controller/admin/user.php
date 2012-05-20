<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_User extends Controller_Admin_Template {

	public function action_index()
	{
		$view = View::factory('admin/user/list');
		$view->users = ORM::factory('user')->find_all();
		$this->template->content = $view;
	}

	public function action_add()
	{
		if ($this->request->post('submit')) {
			$user = ORM::factory('user')->values($this->request->post());
			$password = Text::random();
			$user->password = $password;
			$user->save();
			Message::success('User created with password: '.$password);
			// Add roles
			foreach ($this->request->post('roles') as $role_id) {
				$user->add('roles', ORM::factory('role')->where('id', '=', $role_id)->find());
			}
		}

		$view = View::factory('admin/user/edit');
		$view->user = ORM::factory('user');
		$view->roles = ORM::factory('role')->get_keyed();
		$this->template->content = $view;
	}

	public function action_delete() {
		ORM::factory('user', $this->request->param('id'))->delete();
		$this->request->redirect('admin/user/index');
	}
}
