<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Template {

  public function action_index()
  {
    if (Auth::instance()->logged_in())
    {
      $this->request->redirect('admin/dashboard');
    }
    $view = View::factory('login');
    $this->template->title = 'Login';
    $this->template->home = FALSE;
    $this->template->content = $view;
  }

  public function action_login()
  {
    if (Auth::instance()->login($this->request->post('username'), $this->request->post('password')))
    {
      $this->request->redirect('admin/dashboard');
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

}
