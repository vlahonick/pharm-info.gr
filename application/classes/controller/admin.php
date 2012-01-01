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
          $user->password = Text::random();
          $user->save();
          // Add roles
          foreach ($this->request->post('roles') as $role_id) {
            $user->add('roles', ORM::factory('role')->where('id', '=', $role_id)->find());
          }
        }
        $view = View::factory('admin/user');
        $view->user = array(
          'username' => '',
          'email' => '',
          'roles' => array(),
        );
        $results = ORM::factory('role')->find_all();
        foreach ($results as $role) {
          $roles[$role->id] = $role->name;
        }
        $view->roles = $roles;
        break;
      case 'drug':
        $view = View::factory('admin/drug');
        break;
    }
    $this->response->body($view);
  }

}
