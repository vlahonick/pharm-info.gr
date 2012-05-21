<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Template {

	public function action_index()
	{
		if (Auth::instance()->logged_in())
		{
			$this->request->redirect('home');
		}
		$view = View::factory('user/login');
		$this->template->title = 'Login';
		$this->template->content = $view;
	}

	public function action_login()
	{
		if (Auth::instance()->login($this->request->post('username'), $this->request->post('password')))
		{
			Message::success('Login successfull!');
			$this->request->redirect('home');
		}
		else
		{
			Message::error('Invalid credentials!');
			$this->request->redirect('user');
		}
	}

	public function action_logout()
	{
		Auth::instance()->logout(TRUE);
		$this->request->redirect('user');
	}

}
