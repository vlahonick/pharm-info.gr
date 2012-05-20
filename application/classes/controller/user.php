<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Template {

	public function action_index()
	{
		if (Auth::instance()->logged_in())
		{
			$this->request->redirect('user/dashboard');
		}
		$view = View::factory('user/login');
		$this->template->title = 'Login';
		$this->template->content = $view;
	}

	public function action_login()
	{
		if (Auth::instance()->login($this->request->post('username'), $this->request->post('password')))
		{
			$this->request->redirect('user/dashboard');
		}
		else
		{
			$this->request->redirect('user');
		}
	}

	public function action_logout()
	{
		Auth::instance()->logout(TRUE);
		$this->request->redirect('user');
	}

	public function action_dashboard()
	{
		if ( ! Auth::instance()->logged_in())
		{
			$this->request->redirect('user');
		}
		$view = View::factory('user/dashboard');
		$view->user = Auth::instance()->get_user();
		$view->is_admin = Auth::instance()->logged_in('admin');
		$this->template->title = 'Dashboard';
		$this->template->content = $view;
	}

}
